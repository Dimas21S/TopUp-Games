<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function formLogin()
    {
        return view('auth.login');
    }

    public function formRegister()
    {
        return view('auth.register');
    }

    public function processLogin(Request $request)
    {
        // Validasi Input
        $rule_validation = [
            'username' => 'required|string|max:255',
            'password' => 'required|string|min:8',
        ];

        $validation_messages = [
            'username.required' => 'Username harus diisi.',
            'username.max' => 'Username tidak boleh lebih dari 255 karakter.',
            'password.required' => 'Password harus diisi.',
            'password.min' => 'Password harus minimal 8 karakter.'
        ];

        $request->validate($rule_validation, $validation_messages);

        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            $request->regenerate();

            // Jika admin maka akan diarahkan ke halaman admin
            if (Auth::user()->role == 'admin') {
                return redirect()->view('admin.dashboard')->with('success', 'Login sebagai admin berhasil');
            }

            // Jika login berhasil, redirect ke halaman dashboard
            return redirect()->view('dashboard')->with('success', 'Login berhasil!');
        } else {
            // Jika login gagal, kembali ke form login dengan pesan error
            return redirect()->back()->withErrors(['login_error' => 'Username atau password salah.'])->withInput();
        }
    }

    public function processRegister(Request $request)
    {
        // Validasi Input
        $rule_validation = [
            'username' => 'required|string|max:255',
            'password' => 'required|string|min:8',
            'email' => 'required|email|max:255'
        ];

        $validation_messages = [
            'username.required' => 'Username harus diisi.',
            'username.max' => 'Username tidak boleh lebih dari 255 karakter.',
            'password.required' => 'Password harus diisi.',
            'password.min' => 'Password harus minimal 8 karakter.',
            'email.required' => 'Email harus diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.max' => 'Email tidak boleh lebih dari 255 karakter.'
        ];

        $request->validate($rule_validation, $validation_messages);

        $user = User::create([
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'email' => $request->email,
            'role' => 'user', // Default role
        ]);

        $user->save();

        return redirect()->view('auth.login')->with('success', 'Registrasi akun berhasil.');
    }
}
