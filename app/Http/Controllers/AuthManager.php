<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthManager extends Controller
{
    function login()
    {
        if (Auth::check()) {
            return redirect(route('index'));
        }
        return view('pages/login');
    }

    function register()
    {
        if (Auth::check()) {
            return redirect(route('index'));
        }
        return view('pages/register');
    }

    function loginPost(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $remembered = $request->remember == 'on' ? 'true' : 'false';

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials, $remembered)) {
            return redirect()->intended(route('index'));
        }
        return redirect(route('login'))->with('error', "Username or password was incorrect");
    }

    function registerPost(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users',
            'first_name' => 'required|min:3|max:50',
            'last_name' => 'required|min:3|max:50',
            'password' => 'required|confirmed|min:4'
        ]);

        $data['first_name'] = $request->first_name;
        $data['last_name'] = $request->last_name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);

        if (!$user) {
            return redirect(route('register'))->with('error', 'Registration was unsuccessful');
        }
        return redirect(route('login'))->with('success', 'Registration was successful!');
    }

    function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect(route('login'));
    }

    function profile()
    {
        return view('pages.edit-profile');
    }
}
