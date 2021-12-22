<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KTIController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AbstractController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminTeamController;


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

Route::get('/', [DashboardController::class, 'index'])->middleware('auth', 'registered');

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);


Route::post('/submitabs', [AbstractController::class, 'store']);

Route::get('/verifakun', function(){
    return view('login.verif');
})->middleware('auth'); 

Route::get('/kti', [KTIController::class, 'index'])->middleware('auth', 'registered');
Route::post('/submitbayar', [KTIController::class, 'store'])->middleware('auth', 'registered');
Route::post('/submitkti', [KTIController::class, 'storekti'])->middleware('auth', 'registered');

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {

    Route::get('/', [AdminController::class, 'index']);
  
    Route::prefix('tim')->group(function () {
      Route::get('/', [AdminTeamController::class, 'index']);
      Route::get('/verifikasi', [AdminTeamController::class, 'verifying']);
      Route::get('/ketua', [AdminTeamController::class, 'leader']);
      Route::get('/anggota', [AdminTeamController::class, 'member']);
      Route::get('/{team:id}', [AdminTeamController::class, 'show']);
  
      Route::post('/verifikasi/{user:id}', [AdminTeamController::class, 'verified']);
      Route::post('/verifbayar/{user:id}', [AdminTeamController::class, 'verifiedbayar']);
      Route::post('/resetpass/{user:id}', [AdminTeamController::class, 'resetpass']);
      Route::post('/deleteData/{user:id}', [AdminTeamController::class, 'deletingData']);
    });
  });

