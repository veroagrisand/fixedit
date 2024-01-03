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
    // public function komunitas(Request $request, $id)
    // {
    //     $komunitass = Community::where('id_komunitas', $id)->first(); // pastikan hanya mendapatkan satu objek
    //     return view('SuperUser.SUkelolakomunitas', compact('komunitass'));
    // }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('landing.page')->with('logoutMessage', 'You have been logged out. Please log in again.');
    }
    public function edit($id_komunitas)
    {
        $komunitass = Community::find($id_komunitas);

        if (!$komunitass) {
            return redirect()->back()->with('error', 'Community not found.');
        }
            return view('SuperUser.Sukelolakomunitas', compact('komunitass'));
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

            // return redirect()->back()->with('success', 'Community updated successfully.');
            return view('SuperUser.SUkelola');
        }

}
