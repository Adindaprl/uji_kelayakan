<?php

use App\Http\Controllers\EbookController;
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

// Route::get ('/index', EbookController('index')->{ return view('index')});
Route::get('/', [EbookController::class,'index']);
Route::get('/register', [EbookController::class,'register'])->name('register');
Route::post('/register/account', [EbookController::class,'registerAccount'])->name('register.account');
Route::get('/login',[EbookController::class,'login'])->name('login');
Route::post('/login/auth',[EbookController::class,'auth'])->name('login.auth');

//user
Route::get('/WISpBook',[EbookController::class,'ebook'])->name('ebook');
