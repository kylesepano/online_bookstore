<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function register()
    {
        return view('auth.register');
    }
    public function log(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);
        if (!auth()->attempt($request->only('username', 'password'), $request->remember)) {
            return back()->with('status', 'Invalid Login Details')->withInput();
        }
        return redirect()->route('home')->with('success', 'Successfully Logged In!');
    }
    public function reg(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:users',
            'username' => 'required|unique:users',
            'password' => 'required|confirmed',
        ]);
        user::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'status' => 1,
            'user_type_id' => 2
        ]);
        auth()->attempt($request->only('username', 'password'));
        return redirect()->route('home')->with('success', 'Successfully Registered Account!');
    }
    public function logout(Request $request)
    {
    }
}
