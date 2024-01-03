<?php

namespace App\Http\Controllers;

use App\Models\AdminCommunity;
use App\Models\Community;
use App\Models\joins;
use App\Models\Kategori;
use App\Models\kegiatan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CreateCommunityController extends Controller
{
    public function create()
    {
        $kategori =Kategori::all();
        return view('layouts.createcommunity',compact('kategori'));
    }

    public function store(Request $request)
    {
        $request->validate([
            // 'id_komunitas'=>'required',
            'nama_komunitas' => 'required',
            'image_komunitas' => 'required|image|mimes:jpeg,png,jpg,svg|max:5048',
            'description_komunitas' => 'required','max:255',
            // 'KEY' => 'required',
            'id_kategori' => 'required',
        ]);

        $newFotoName ='images'.'/'.'community'.'/'.Auth::user()->name  . '-' . $request->input('nama_komunitas') . '.' . $request->image_komunitas->getClientOriginalExtension();

        // $request->id_komunitas->
        $request->image_komunitas->move(public_path('images/community'), $newFotoName);

        // $prefix = ucwords(strtolower(substr($request->input('nama_komunitas'), 0, 2)));
        $prefix = strtoupper(substr($request->input('nama_komunitas'), 0, 2));

        // Ambil nilai maksimum dari kolom id_komunitas dengan awalan yang sesuai
        $maxId = Community::where('id_komunitas', 'like', $prefix . '%')->max('id_komunitas');

        // Jika tidak ada nilai maksimum (tabel kosong atau belum ada dengan awalan tersebut), mulai dari 1
        if (!$maxId) {
            $nextNumber = 1;
        } else {
            // Mendapatkan dua digit terakhir dari $maxId
            $twoDigitLast = substr($maxId, -2);

            // Mengonversi dua digit terakhir ke angka
            $lastTwoDigits = (int)$twoDigitLast;

            // Menambahkan satu ke dua digit terakhir
            $nextNumber = $lastTwoDigits + 1;

            // Jika nilai $nextNumber melebihi 99, atur kembali ke 1
            $nextNumber = $nextNumber > 99 ? 1 : $nextNumber;
        }

        // Format nilai berikutnya dengan menambahkan dua huruf di awal
        $id_komunitas = $prefix . str_pad($nextNumber, 2, '0', STR_PAD_LEFT);

        // Ubah nama_komunitas sesuai dengan format yang diinginkan
        // $nama_komunitas = $request->input('nama_komunitas') . str_pad($nextNumber, 2, '0', STR_PAD_LEFT);


        // $key = Auth::user()->KEY;
        // $email = Auth::user()->email;
        $komunitas = Community::create([
            'id_komunitas'=>$id_komunitas,
            'nama_komunitas' => $request->input('nama_komunitas'),
            'KEY' => Auth::user()->KEY,
            'image_komunitas' => $newFotoName,
            'description_komunitas' => $request->input('description_komunitas'),
            'id_kategori' => $request->input('id_kategori'),
        ]);

        // Create a record in AdminCommunity with the relationship to Community
        $komunitas->adminCommunity()->create([

            'email' => Auth::user()->email,
            'id_komunitas'=>$id_komunitas,
        ]);

        Auth::user()->update(['role' => 'admin_group']);

        return redirect()->route('community');

        }
        public function join(Request $request, $id)
        {
            $komunitass = Community::where('id_komunitas', $id)->first(); // pastikan hanya mendapatkan satu objek
            return view('layouts.komunitas.join', compact('komunitass'));



        }

        public function joinS(Request $request, $id)
        {
            $komunitass = Community::where('id_komunitas', $id)->first();
            joins::create([
                'id_komunitas'=>$id,
                'email'=> Auth::user()->email,
                'KEY' => Auth::user()->KEY,
            ]);
            // dd($joint);

            return redirect()->route('Community.join',['id_komunitas'=> $komunitass->id_komunitas]);

            }
        public function mycommunity(){
            // $komunitas=Community::all();
             // Mendapatkan pengguna yang sedang login
            $user = Auth::user();

            // // Mendapatkan komunitas yang dimiliki oleh pengguna
            $komunitas = $user->komunitas;


            return view('layouts/mycommunity',compact('komunitas'));
        }
        public function event(Request $request, $id)
        {
            $komunitass = Community::where('id_komunitas', $id)->first(); // pastikan hanya mendapatkan satu objek
            return view('layouts.komunitas.event', compact('komunitass'));
        }

        public function galery(Request $request, $id)
        {
            $komunitass = Community::where('id_komunitas', $id)->first(); // pastikan hanya mendapatkan satu objek
            return view('layouts.komunitas.galery', compact('komunitass'));
        }

        public function forum(Request $request, $id)
        {
            $komunitass = Community::where('id_komunitas', $id)->first(); // pastikan hanya mendapatkan satu objek
            return view('layouts.komunitas.forum', compact('komunitass'));
        }
        public function edit($id_komunitas)
        {
            $komunitass = Community::find($id_komunitas);

            if (!$komunitass) {
                return redirect()->back()->with('error', 'Community not found.');
            }

            return view('layouts.komunitas.edit', compact('komunitass'));
        }

        public function update(Request $request, $id_komunitas)
        {
            $request->validate([
                'new_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                'new_name' => 'string|max:255',
                'description_komunitas' => 'string|max:255',
            ]);

            $komunitass = Community::find($id_komunitas);

            if (!$komunitass) {
                return redirect()->back()->with('error', 'Community not found.');
            }

            // Check if a new image is uploaded
            if ($request->hasFile('new_image')) {
                // Store the new image and update the database field
                $imagePath = $request->file('new_image')->store('community_images', 'public');
                $komunitass->image_komunitas = $imagePath;
            }

            if ($request->filled('new_name')) {
                $komunitass->nama_komunitas = $request->input('new_name');
            }

            if ($request->filled('description_komunitas')) {
                $komunitass->description_komunitas = $request->input('description_komunitas');
            }

            $komunitass->save();

            return redirect()->back()->with('success', 'Community updated successfully.');
        }

        public function addevent(Request $request, $id)
        {
            $komunitass = Community::where('id_komunitas', $id)->first(); // pastikan hanya mendapatkan satu objek
            return view('layouts.komunitas.addevent', compact('komunitass'));
        }

        public function addeventpost(Request $request, $id_komunitas)
        {
            // Uncomment the line below to check the form data
            dd($request->all());

            $request->validate([
                'nama_kegiatan'     => 'required',
                'detail_kegiatan'   => 'required',
                'tgl_kegiatan'      => 'required',
                'jam_kegiatan'      => 'required',
                'slug'              => 'required',
                'gallery'           => 'required|image|mimes:jpeg,png,jpg,svg|max:5048',
            ]);

            $namekegiatan = 'images' . '/' . 'kegiatan' . '/' . Auth::user()->name . '-' . $request->input('nama_kegiatan') . '.' . $request->gallery->getClientOriginalExtension();

            $maxKey = DB::table('users')->max('KEY');
            $lastTwoDigits = (int) substr($maxKey, -2);
            $nextNumber = $lastTwoDigits + 1;
            $nextNumber = $nextNumber > 99 ? 1 : $nextNumber;
            $id_kegiatan = str_pad($nextNumber, 2, '0', STR_PAD_LEFT);

            $kegiatan = Kegiatan::create([
                'id_komunitas'      => $id_komunitas,
                'id_kegiatan'       => $id_kegiatan,
                'nama_kegiatan'     => $request->input('nama_kegiatan'),
                'detail_kegiatan'   => $request->input('detail_kegiatan'),
                'tgl_kegiatan'      => $request->input('tgl_kegiatan'),
                'jam_kegiatan'      => $request->input('jam_kegiatan'),
                'slug'              => $request->input('slug'),
                'gallery'           => $namekegiatan,
            ]);

            // Uncomment the line below to check the created Kegiatan
            // dd($kegiatan);

            return redirect()->route('mycommunity.Event', ['id_komunitas' => $id_komunitas]);
        }




}
