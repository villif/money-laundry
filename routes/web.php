<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;

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

Route::get('/home', function () {
    return view('index');
})->middleware('auth');

route::resource('outlet',OutletController::class);
route::resource('paket',PaketController::class);
route::resource('member',MemberController::class);
route::get('/',[LoginController::class,'index'])->name('login')->middleware('guest');
route::post('/',[LoginController::class,'authenticate'])->name('login')->middleware('guest');
route::post('/logout',[LoginController::class,'logout'])->name('login');

