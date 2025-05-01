<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use Laravolt\Indonesia\Facade as Indonesia;

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
            'password' => 'required|min:3|max:8'
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

        return back()->with('loginError', 'Login Gagal! Email atau password salah.');
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
        $provinces = Indonesia::allProvinces();
        $cities = Indonesia::allCities();
        $districts = Indonesia::allDistricts();
        $villages = Indonesia::allVillages();

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

    public function showForgotPasswordForm()
    {
        return view('forgotPassword', [
            "title" => "HydroSpace | Lupa Password"
        ]);
    }


    public function sendResetLinkEmail(Request $request)
    {
        // Validasi email
        $request->validate([
            'email' => 'required|email'
        ]);

        // Cek apakah email ada di database
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->with('error', 'Email yang kamu masukkan belum terdaftar pada sistem kami.');
        }

        // Generate token reset password
        $token = Password::createToken($user);
        $resetUrl = url('/reset-password/' . $token . '?email=' . urlencode($request->email));

        // Kirim email dengan template
        Mail::send('emails.resetPassword', ['resetUrl' => $resetUrl], function ($message) use ($request) {
            $message->to($request->email)
                ->subject('Reset Password HydroSpace');
        });

        return back()->with('success', 'Link reset password telah dikirim ke email Kamu.');
    }

    public function showResetPasswordForm($token)
    {
        // Menampilkan halaman reset password dengan token
        return view('resetPassword', [
            'token' => $token,
            'title' => 'HydroSpace | Reset Password'
        ]);
    }

    public function resetPassword(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|string|min:3|max:8',
            'confirm_password' => 'required|string|min:3|max:8|same:password',
            'token' => 'required'
        ]);

        // Reset password menggunakan token
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill(['password' => Hash::make($password)])->save();
            }
        );

        // Redirect berdasarkan status reset password
        return $status === Password::PASSWORD_RESET
            ? redirect('/masuk')->with('success', 'Password berhasil direset, silakan login.')
            : back()->with('error', 'Token tidak valid atau kedaluwarsa.');
    }
}
