<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/')->with('success', 'Login Berhasil');
        }

        return back()->withErrors([
            'wrong' => 'Username atau password anda salah',
        ]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'email' => 'required',
            'name' => 'required',
            'hp' => 'required',
            'password' => 'required',
            'confirm' => 'required|same:password',
        ]);

        User::create([
            'email' => $request->email,
            'no_hp' => $request->hp,
            'password' => bcrypt($request->password),
            'name' => $request->name,
        ]);

        return redirect('/login');
    }

    public function update(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'name' => 'required',
            'hp' => 'required',
            'password' => 'required',
            'confirm' => 'required|same:password',
        ]);
        if (Hash::check($request->password, Auth::user()->password)) {
            User::where('id', Auth::user()->id)->update([
                'email' => $request->email,
                'no_hp' => $request->hp,
                'password' => bcrypt($request->password),
                'name' => $request->name,
            ]);

            return redirect('/')->with('success', 'Data berhasil diubah');
        } else {
            return back()->withErrors([
                'wrong' => 'Password anda salah',
            ]);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('success', 'Berhasil Logout');
    }
}
