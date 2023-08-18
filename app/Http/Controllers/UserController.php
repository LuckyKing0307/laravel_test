<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function create()
    {
    	return view('user.create');
    }

    public function store(Request $request)
    {
    	$request->validate([
    		'username'=>'required|unique:users',
    		'password'=>'required|confirmed',
    	]);
    	$user = User::create([
    		'username' => $request->username,
    		'password' => Hash::make($request->username),
    	]);

    	Auth::login($user);
    	return redirect()->route('home');
    }

    public function loginForm()
    {
    	return view('user.login');
    }

    public function login(Request $request)
    {
    	$credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect()->route('home');
        }else{
    		return redirect()->back()->with('error','Incorrect login or password');
        }
    }

    public function logout()
    {
    	Auth::logout();
    	return redirect()->route('login.creata');
    }
}
