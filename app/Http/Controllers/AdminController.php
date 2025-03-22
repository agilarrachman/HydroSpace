<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show(User $user)
    {
        return view('dashboard.profile', [
            "title" => "HydroSpace | Profile",
            "active" => "Profile",
            "admin" => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('dashboard.updateProfile', [
            "title" => "HydroSpace | Update Profile",
            "active" => "Profile",
            "admin" => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        // Define validation rules for the fields
        $rules = [
            'profile_picture' => 'nullable|image|file|max:5000',
            'name' => 'required|string|max:255',
            'gender' => 'required|string|in:Pria,Wanita',
            'phone_number' => ['required', 'string', 'regex:/^08[0-9]{8,11}$/']
        ];

        // Conditional validation for email and username
        if ($request->email !== $user->email) {
            $rules['email'] = 'required|email:dns|unique:users,email';
        }
        if ($request->username !== $user->username) {
            $rules['username'] = 'required|string|max:255|unique:users,username';
        }

        // Validate input data
        $validatedData = $request->validate($rules);

        // Jika ada upload foto profil baru
        if ($request->file('profile_picture')) {
            // Simpan foto baru dan hapus foto lama (jika ada dan bukan gambar default)
            if ($user->profile_picture && $user->profile_picture !== 'profile_picture/default admin.png') {
                Storage::delete('public/' . $user->profile_picture);
            }
            $validatedData['profile_picture'] = $request->file('profile_picture')->store('profile_picture', 'public');
        }

        // Update the user record with the validated data
        User::where('id', $user->id)->update($validatedData);

        // Redirect back to the profile page with a success message
        $redirectUsername = $validatedData['username'] ?? $user->username;
        return redirect('/dashboard/profile/' . $redirectUsername)->with('success', 'Profil kamu berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }
}
