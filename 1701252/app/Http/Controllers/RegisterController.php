<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $validation = $request->validate([
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'name' => 'required',
        ]);

        $user = new User();
        $user->email = $validation['email'];
        $user->password = Hash::make($validation['password']);
        $user->name = $validation['name'];
        $user->save();

        return redirect()->route('home');
    }
}
