<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Laravolt\Indonesia\Models\Province;
use Laravolt\Indonesia\Models\City;
use Laravolt\Indonesia\Models\District;
use Laravolt\Indonesia\Models\Village;

class AuthenticationController extends Controller
{
    public function login()
    {
        return view('signin', [
            "title" => "HydroSpace | Masuk"
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        // Periksa apakah checkbox "Remember Me" dicentang
        $remember = $request->has('remember-me');

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();

            // Mengecek role pengguna setelah login
            if (Auth::user()->role === 'Admin') {
                // Redirect ke admin dashboard jika role adalah Admin
                return redirect()->intended('/dashboard');
            }

            // Redirect ke halaman utama jika role adalah User
            return redirect()->intended('/');
        }
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }

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

    public function storeCustomer(Request $request)
    {

        $validatedData = $request->validate([
            'profile_picture' => 'image|file|max:5000',
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username',
            'gender' => 'required|string|in:Pria,Wanita',
            'phone_number' => ['required', 'string', 'regex:/^08[0-9]{8,11}$/'],
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

        // Hapus session email dan password
        session()->forget(['email', 'password']);

        return redirect('/masuk')->with('success', 'Registrasi berhasil! Harap login terlebih dahulu');
    }
}
