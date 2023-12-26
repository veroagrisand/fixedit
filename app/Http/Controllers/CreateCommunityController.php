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
}