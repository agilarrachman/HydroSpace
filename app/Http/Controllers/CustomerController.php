<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravolt\Indonesia\Models\Province;
use Laravolt\Indonesia\Models\City;
use Laravolt\Indonesia\Models\District;
use Laravolt\Indonesia\Models\Village;
use Illuminate\Support\Facades\Storage;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $customers = User::where('role', 'Customer')
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->input('search');
                $query->where('name', 'like', "%$search%")
                    ->orWhere('email', 'like', "%$search%")
                    ->orWhere('username', 'like', "%$search%");
            })
            ->paginate(10);

        return view('dashboard.customers.index', [
            "title" => "HydroSpace | Pelanggan",
            "active" => "Pelanggan",
            "customers" => $customers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $provinces = Province::all();
        $cities = City::all();
        $districts = District::all();
        $villages = Village::all();

        return view('dashboard.customers.create', [
            "title" => "HydroSpace | Tambah Pelanggan",
            "active" => "Pelanggan",
            'provinces' => $provinces,
            'cities' => $cities,
            'districts' => $districts,
            'villages' => $villages,
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
            'province' => 'nullable|integer',
            'city' => 'nullable|integer',
            'district' => 'nullable|integer',
            'village' => 'nullable|integer',
            'full_address' => 'nullable|string',
            'role' => 'required|in:Admin,Customer'
        ]);

        // Jika ada file profile_picture, simpan ke storage
        if ($request->file('profile_picture')) {
            $validatedData['profile_picture'] = $request->file('profile_picture')->store('profile_picture', 'public');
        } else {
            // Jika tidak ada file, gunakan default profile picture
            $validatedData['profile_picture'] = 'profile_picture/default profile picture.jpg';
        }

        User::create($validatedData);

        return redirect('/dashboard/customers')->with('success', 'Data Pelanggan berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        $provinces = Province::all();
        $cities = City::all();
        $districts = District::all();
        $villages = Village::all();

        return view('dashboard.customers.show', [
            "title" => "HydroSpace | Detail Pelanggan",
            "active" => "Pelanggan",
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

        return view('dashboard.customers.edit', [
            "title" => "HydroSpace | Edit Data Pelanggan",
            "active" => "Pelanggan",
            "customer" => $user,
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
        return redirect('/dashboard/customers/' . $redirectUsername)->with('success', 'Profil pelanggan berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        // Hapus foto profil user jika ada
        if ($user->profile_picture && $user->profile_picture !== 'profile_picture/default profile picture.jpg') {
            Storage::disk('public')->delete($user->profile_picture);
        }

        // Hapus data user dari database
        $user->delete();

        // Redirect ke halaman depan dengan pesan sukses
        return redirect('/dashboard/customers')->with('success', 'Akun pelanggan telah berhasil dihapus!');
    }
}
