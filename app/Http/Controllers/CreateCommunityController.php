<?php

namespace App\Http\Controllers;

use App\Models\Community;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CreateCommunityController extends Controller
{
    public function create()
    {
        return view('layouts.createcommunity');
    }

    public function store(Request $request)
    {
        $request->validate([
            // 'id_komunitas' =>'required',
            'nama_komunitas' => 'required',
            'image_komunitas' => 'required|image|mimes:jpeg,png,jpg,svg|max:5048',
            'description_komunitas' => 'required',
            'id_kategori' => 'required',
        ]);
        
        $newFotoName =Auth::user()->name  . '-' . $request->input('nama_komunitas') . '.' . $request->image_komunitas->getClientOriginalExtension();

        // $newFotoName = Auth::user()->name . '-' . $request->image_komunitas->getClientOriginalName();
        $request->image_komunitas->move(public_path('images/community'), $newFotoName);
        // $komunitas->update(['id_komunitas' => '001' . $komunitas->id]);

        $komunitas = Community::create([
            // 'id_komunitas' => $komunitas,
            'nama_komunitas' => $request->input('nama_komunitas'),
            'image_komunitas' => $newFotoName,
            'description_komunitas' => $request->input('description_komunitas'),
            'id_kategori' => $request->input('id_kategori'),
        ]);

        // Update id_komunitas setelah data disimpan

        return redirect('/createcommunity');
        // return redirect()->route('/createcommunity')->with('success', 'Komunitas berhasil dibuat.');
    }
}