<?php

namespace App\Http\Controllers;

use App\Models\Community;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Superuser extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     return view('SuperUser.SUNavbar');
    // }
    public function Home()
    {
        $User =User::all();
        return view('SuperUser.SUhome',compact('User'));
    }
    public function kelola()
    {
        return view('SuperUser.SUkelola');
    }
    public function user()
    {
        $User =User::all();
        return view('SuperUser.SUusers',compact('User'));
    }
    public function kegiatan(Request $request, $id)
    {
        $komunitass = Community::where('id_komunitas', $id)->first(); // pastikan hanya mendapatkan satu objek
        return view('SuperUser.SUkelolakegiatan', compact('komunitass'));
    }
    public function komunitas(Request $request, $id)
    {
        $komunitass = Community::where('id_komunitas', $id)->first(); // pastikan hanya mendapatkan satu objek
        return view('SuperUser.SUkelolakomunitas', compact('komunitass'));
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('landing.page')->with('logoutMessage', 'You have been logged out. Please log in again.');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
