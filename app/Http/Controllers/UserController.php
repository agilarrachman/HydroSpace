<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Laravolt\Indonesia\Models\Province;
use Laravolt\Indonesia\Models\City;
use Laravolt\Indonesia\Models\District;
use Laravolt\Indonesia\Models\Village;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function regist()
    {
        return view('signup', [
            "title" => "HydroSpace | Registrasi"
        ]);
    }

    public function createAccount(Request $request)
    {

        $validatedData = $request->validate([
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:3|max:8',
            'confirm-password' => 'required|same:password',
        ], [
            'confirm-password.same' => 'Konfirmasi password harus sama dengan password.',
        ]);

        // Hash password
        $validatedData['password'] = Hash::make($validatedData['password']);

        // Simpan email dan hashed password ke session
        session([
            'email' => $validatedData['email'],
            'password' => $validatedData['password'],
        ]);

        // Redirect ke halaman penginputan data diri tanpa membawa data di URL
        return redirect('/buat-profil');
    }


    public function showCreateProfile()
    {
        $provinces = Province::all();
        $cities = City::all();
        $districts = District::all();
        $villages = Village::all();

        $email = session('email');
        $hashedPassword = session('password');

        // Redirect jika session tidak ditemukan
        if (!$email || !$hashedPassword) {
            return redirect('/registrasi')->with('error', 'Data tidak valid. Silakan daftar ulang.');
        }

        // Kirim data ke view
        return view('createProfile', [
            'title' => 'HydroSpace | Lengkapi Profil',
            'email' => $email,
            'password' => $hashedPassword,
            'provinces' => $provinces,
            'cities' => $cities,
            'districts' => $districts,
            'villages' => $villages,
        ]);
    }

    public function index()
    {
        return view('masuk');
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
    public function storeCustomer(Request $request)
    {

        $validatedData = $request->validate([
            'profile_picture' => 'image|file|max:5000',
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username',
            'gender' => 'required|string|in:Pria,Wanita',
            'phone_number' => 'required|string|max:15',
            'email' => 'required|email:dns|unique:users,email',
            'password' => 'required|string',
            'province' => 'nullable|integer',
            'city' => 'nullable|integer',
            'district' => 'nullable|integer',
            'village' => 'nullable|integer',
            'full_address' => 'nullable|string',
            'role' => 'required|in:Admin,Customer'
        ]);

        if ($request->file('profile_picture')) {
            $validatedData['profile_picture'] = $request->file('profile_picture')->store('profile_picture', 'public');
        }

        User::create($validatedData);

        return redirect('/masuk')->with('success', 'Registrasi berhasil! Harap login terlebih dahulu');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
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
        //
    }
}
