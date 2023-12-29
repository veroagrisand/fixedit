<?php

namespace App\Http\Controllers;

use App\Models\Community;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

            'nama_komunitas' => 'required',
            'image_komunitas' => 'required|image|mimes:jpeg,png,jpg,svg|max:5048',
            'description_komunitas' => 'required','max:255',
            'id_kategori' => 'required',
        ]);

        $newFotoName ='images'.'/'.'community'.'/'.Auth::user()->name  . '-' . $request->input('nama_komunitas') . '.' . $request->image_komunitas->getClientOriginalExtension();


        $request->image_komunitas->move(public_path('images/community'), $newFotoName);


        $komunitas = Community::create([

            'nama_komunitas' => $request->input('nama_komunitas'),
            'image_komunitas' => $newFotoName,
            'description_komunitas' => $request->input('description_komunitas'),
            'id_kategori' => $request->input('id_kategori'),
        ]);



        return redirect('/community');

        }
        public function mycommunity(){
            // $komunitas=Community::all();
             // Mendapatkan pengguna yang sedang login
            $user = Auth::user();

            // Mendapatkan komunitas yang dimiliki oleh pengguna
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
            return view('layouts.komunitas.galery', compact('komunitass'));
        }
}
