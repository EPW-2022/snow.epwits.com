<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Leader;

class AdminController extends Controller
{
    public function index()
    {

        return view('admin.index', [
            'title'         => 'Dashboard Admin',
            'teams'         => Leader::all()->count(),
            'unverify'      => Leader::where('is_verified', false)->count(),
            'rejected'      => Leader::onlyTrashed()->count()
        ]);
    }
}
