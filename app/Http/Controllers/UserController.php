<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Laravolt\Indonesia\Models\Province;
use Laravolt\Indonesia\Models\City;
use Laravolt\Indonesia\Models\District;
use Laravolt\Indonesia\Models\Village;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
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
    public function store(Request $request) {}

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        $provinces = Province::all();
        $cities = City::all();
        $districts = District::all();
        $villages = Village::all();

        return view('profile', [
            "title" => "HydroSpace | Profil",
            "active" => "Lihat Profil",
            'customer' => $user,
            'provinces' => $provinces,
            'cities' => $cities,
            'districts' => $districts,
            'villages' => $villages, 
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $provinces = Province::all();
        $cities = City::all();
        $districts = District::all();
        $villages = Village::all();

        return view('updateProfile', [
            "title" => "HydroSpace | Perbarui Profil",
            "active" => "Perbarui Profil",
            'customer' => $user,
            'provinces' => $provinces,
            'cities' => $cities,
            'districts' => $districts,
            'villages' => $villages,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $rules = [
            'profile_picture' => 'nullable|image|file|max:5000',
            'name' => 'required|string|max:255',
            'gender' => 'required|string|in:Pria,Wanita',
            'phone_number' => ['required', 'string', 'regex:/^08[0-9]{8,11}$/'],
            'province' => 'nullable|integer',
            'city' => 'nullable|integer',
            'district' => 'nullable|integer',
            'village' => 'nullable|integer',
            'full_address' => 'nullable|string'
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
            if ($user->profile_picture && $user->profile_picture !== 'profile_picture/default profile picture.jpg') {
                Storage::delete('public/' . $user->profile_picture);
            }
            $validatedData['profile_picture'] = $request->file('profile_picture')->store('profile_picture', 'public');
        }

        // Update the user record with the validated data
        User::where('id', $user->id)->update($validatedData);

        // Redirect back to the profile page with a success message
        $redirectUsername = $validatedData['username'] ?? $user->username;
        return redirect('/profil/' . $redirectUsername)->with('success', 'Profil kamu berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        // Ambil user yang sedang login
        $currentUser = Auth::user();

        // Pastikan user yang sedang login sama dengan user yang akan dihapus
        if ($currentUser->id !== $user->id) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        // Hapus foto profil user jika ada
        if ($user->profile_picture && $user->profile_picture !== 'profile_picture/default profile picture.jpg') {
            Storage::disk('public')->delete($user->profile_picture);
        }

        // Hapus data user dari database
        $user->delete();

        // Redirect ke halaman depan dengan pesan sukses
        return redirect('/');
    }

    public function updatePassword(Request $request, User $user)
    {

        // Validasi data input untuk password baru
        $validatedData = $request->validate([
            'current_password' => 'required|string|min:3|max:8',
            'password' => 'required|string|min:3|max:8',
            'confirm_password' => 'required|string|min:3|max:8|same:password',
        ], [
            'confirm_password.confirmed' => 'Password dan Konfirmasi Password tidak cocok.',
        ]);

        // Cek apakah current_password cocok dengan password lama
        if (!Hash::check($validatedData['current_password'], $user->password)) {
            return back()->with('false', 'Password lama tidak sesuai, Mohon masukkan password lama dengan benar!');
        }

        // Update password
        $user->update([
            'password' => Hash::make($validatedData['password']),
        ]);

        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        // Redirect dengan pesan sukses
        return redirect('/masuk')->with('success', 'Password telah berhasil diupdate, Silakan login kembali!');
    }
}
