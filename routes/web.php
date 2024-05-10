<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
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

Route::get('/home', function () {
    return view('home');
});

Route::get('/showRegistrationForm', [UsersController::class, 'showRegistrationForm'])->name('showRegistrationForm');
Route::post('/register', [UsersController::class, 'register'])->name('register');
Route::get('/showLoginForm', [UsersController::class, 'showLoginForm'])->name('showLoginForm');
Route::post('/login', [UsersController::class, 'login'])->name('login');
