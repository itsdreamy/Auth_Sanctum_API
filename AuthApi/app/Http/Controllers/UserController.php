<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(){
        return view('login');
    }

    public function postlogin(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        $infologin = [
            'email' => $request->email,
            'password' =>$request->password
        ];

        if(Auth::attempt($infologin)){
            return redirect('/home');
        }
        return back()->with('status', 'Username atau password salah');
    }

    public function register(){
        return view('register');
    }

    public function postregister(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        User::create([
            'email'=>$request->email,
            'password'=>bcrypt($request->password)
        ]);

        return redirect('/')->with('status', 'Registrasi Berhasil ! Silahkan Login !');
    }

    public function home(){
        return view('landingpage');
    }

    public function logout(){
        Auth::logout();
        return redirect('/')->with('status', 'Berhasil logout');
    }
}
