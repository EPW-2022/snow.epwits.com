<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Leader;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }

    public function cek(Request $request){
        if (Auth::check()) {
            Auth::logout();
            $request->session()->invalidate();

    $request->session()->regenerateToken();
        }
        return view('login.index');
    }

    public function authenticate(Request $request){
        $credentials=$request->validate([
            "username"=>'required|min:6',
            "password"=>'required'
        ]);
        
        


        if(Auth::attempt($credentials)){
            if (auth()->user()->roles == 'Admin' || auth()->user()->roles == 'Superadmin') {
                return redirect('/admin');
            } else {
                if (auth()->user()->leader->is_verified == false  ) {
                    return redirect('/verifakun');   
                } else {
                    return redirect('/kti');
            }  } 
        }     
        return back()->with('loginerror', 'Login gagal');
    }

    public function logout(Request $request)
{
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/login');
}
}
