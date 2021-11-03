<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        if (auth()->user()->leader->is_verified==true) {
            
            return view('dashboard.index');
        }
        Auth::logout();
        return view('login.index');
    }
}
