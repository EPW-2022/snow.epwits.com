<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Leader;
use App\Model\Member;
use App\Models\Member as ModelsMember;
use App\Models\Member2;

use function PHPUnit\Framework\isNull;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index');
    }

    public function indexloan(){
        return view('register.loan');
    }
}


