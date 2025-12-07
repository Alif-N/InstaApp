<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Tampilkan form register
     */
    public function showRegisterForm()
    {
        return view('register'); // sesuai permintaanmu: register view di welcome.blade.php
    }

    /**
     * Proses register
     */
    public function register(Request $request)
    {
        $validated = $request->validate(
            [
                'username' => ['required', 'string', 'max:255', 'unique:users,username'],
                'email'    => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
                // password_confirmation otomatis dicek oleh rule confirmed
            ],
            [
                'username.required'     => 'Nama wajib diisi.',
                'email.required'        => 'Email wajib diisi.',
                'email.email'           => 'Format email tidak valid.',
                'email.unique'          => 'Email sudah terdaftar.',
                'password.required'     => 'Password wajib diisi.',
                'password.min'          => 'Password minimal 8 karakter.',
                'password.confirmed'    => 'Konfirmasi password tidak sama.',
            ]
        );

        $user = User::create([
            'username'     => $validated['username'],
            'email'    => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        // Auto login setelah register
        Auth::login($user);

        return redirect()->route('home')
            ->with('success', 'Registrasi berhasil. Selamat datang di InstaApp!');
    }
}
