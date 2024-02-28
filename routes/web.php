<?php

use App\Http\Controllers\ukk_fia2024Controller;
use App\Models\ukk_fia2024model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');      
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('ukk_fia2024',[ukk_fia2024Controller::class,'index']);
//Route::get('ukk_fia2024/{id}',[ukk_fia2024Controller::class,'detail'])->where('id','[0+9]');
Route::resource('ukk_fia2024',ukk_fia2024Controller::class);
Route::get('/cetakdata',[ukk_fia2024Controller::class,"cetakdata"]);

