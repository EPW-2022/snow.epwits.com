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

    public function authenticate(Request $request){
        $credentials=$request->validate([
            "username"=>'required|min:6',
            "password"=>'required'
        ]);
        
        $user=User::where('username', $request->username)->first();
        $syarat=$user->id;
        $leader=Leader::where('user_id', $syarat)->first();
        $syarat2=$leader->is_verified;
        

        if(Auth::attempt($credentials)){
            if ($syarat2=="1"  ) {
                $request->session()->regenerate();
                return redirect()->intended('/dashboard');
            } else {
                $request->session()->regenerate();
                return redirect()->intended('/verifakun');
            }
            
            
        }

        return back()->with('loginerror', 'loginfailed');
    }

    public function logout(Request $request)
{
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
}
}
