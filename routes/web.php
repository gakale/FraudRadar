<?php

use App\Http\Controllers\FraudController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/showRegistrationForm', [UsersController::class, 'showRegistrationForm'])->name('showRegistrationForm');
Route::post('/register', [UsersController::class, 'register'])->name('register');
Route::get('/showLoginForm', [UsersController::class, 'showLoginForm'])->name('showLoginForm');
Route::post('/login', [UsersController::class, 'login'])->name('login');
Route::get('/logout', [UsersController::class, 'logout'])->name('logout');
Route::get('/user/index', [UsersController::class, 'index'])->name('user.index');
Route::get('/user/post', [UsersController::class, 'postIndex'])->name('user.post');

Route::get('/fraud/create', [FraudController::class, 'create'])->name('fraud.create');
Route::post('/fraud/store', [FraudController::class, 'store'])->name('fraud.store');
Route::get('/fraud/index', [FraudController::class, 'index'])->name('fraud.index');

Route::get('/fraud/show/{slug}', [FraudController::class, 'show'])->name('fraud.show');
Route::post('/tmp-upload', [FraudController::class, 'tmpUpload']);
Route::get('/tmp-delete', [FraudController::class, 'tmpDelete']);
