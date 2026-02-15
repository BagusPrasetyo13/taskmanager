<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // LOGIN
    public function loginIndex()
    {
        return view('auth.login', [
            'title' => 'Login'
        ]);
    }

    public function loginStore(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (!Auth::attempt($credentials)) {
            return back()->with('error', 'Email atau Password Salah');
        }

        return redirect('/');
    }

    // LOGIN END

    // REGISTER
    public function registerIndex()
    {
        return view('auth.register', [
            'title' => 'Register'
        ]);
    }

    public function registerStore(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|email|unique:users,email|max:50',
            'password' => 'required|min:6|confirmed'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        // dd($validatedData);

        $user = User::create($validatedData);
        Auth::login($user);

        return redirect('/');
    }
    // REGISTER END

    // LOGOUT
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
