<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AbstractController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);


Route::post('/submitabs', [AbstractController::class, 'store']);

Route::get('/verifakun', function(){
    return view('login.verif');
})->middleware('auth') ; 

// Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
// Route::get('/home', function (Request $request) {
//     if (Auth::check()) {
//         Auth::logout();
//             $request->session()->invalidate();
//     }
//     return view('login.index');
// });

// Route::post('/kunciabs', [AbstractController::class, 'lock']);