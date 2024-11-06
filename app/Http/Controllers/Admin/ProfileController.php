<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        return view('backend.profile.index');    
    }

    public function edit()
    {
        $UserId = Auth::id();
        $user = User::findOrFail($UserId);
        return view('backend.profile.edit',compact('user'));    
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        // Validate input
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        // Update profile
        $user->username = $request->input('username');
        $user->email = $request->input('email');

        // Check if the password fields are filled and update the password
        if ($request->filled('password')) {
            $user->password = Hash::make($request->input('password'));
        }

        $user->save();

        toast('Profile updated successfully!','success');
        return redirect()->back();
    }
}
