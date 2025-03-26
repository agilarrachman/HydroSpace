<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.admin', [
            "title" => "HydroSpace | Admin",
            "active" => "Admin",
            'admins' => User::where('role', 'Admin')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.createAdmin', [
            "title" => "HydroSpace | Tambah Admin",
            "active" => "Admin"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'profile_picture' => 'image|file|max:5000',
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username',
            'gender' => 'required|string|in:Pria,Wanita',
            'phone_number' => ['required', 'string', 'regex:/^08[0-9]{8,11}$/'],
            'email' => 'required|email:dns|unique:users,email',
            'password' => 'required|min:3|max:8',
            'role' => 'required|in:Admin,Customer'
        ]);

        // Jika ada file profile_picture, simpan ke storage
        if ($request->file('profile_picture')) {
            $validatedData['profile_picture'] = $request->file('profile_picture')->store('profile_picture', 'public');
        } else {
            // Jika tidak ada file, gunakan default profile picture
            $validatedData['profile_picture'] = 'profile_picture/default admin.png';
        }

        User::create($validatedData);

        return redirect('/dashboard/admins')->with('success', 'Data Admin berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('dashboard.adminDetail', [
            "title" => "HydroSpace | Detail Admin",
            "active" => "Admin",
            "admin" => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        // 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        // Hapus foto profil user jika ada
        if ($user->profile_picture && $user->profile_picture !== 'profile_picture/default admin.png') {
            Storage::disk('public')->delete($user->profile_picture);
        }

        // Hapus data user dari database
        $user->delete();

        // Redirect ke halaman depan dengan pesan sukses
        return redirect('/dashboard/admins')->with('success', 'Akun admin telah berhasil dihapus!');
    }
}
