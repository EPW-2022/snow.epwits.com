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
        
        $user=User::where('username', $request->username)->first();
        $syarat=$user->id;
        $leader=Leader::where('user_id', $syarat)->first();
        $syarat2=$leader->is_verified;
        
        $namateam=$user->namatim;
        $asalsekolah=$leader->asalsekolah;


        if(Auth::attempt($credentials)){
            
            if ($syarat2=="1"  ) {
                return view('dashboard.index');   
            } else {
                return view('login.verif');
            }   
        }     
        return back()->with('loginerror', 'Login gagal');
    }

    public function logout(Request $request)
{
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
}
}
