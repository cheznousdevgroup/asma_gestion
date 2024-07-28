<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
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

// Authentification
Route::get('/', [PageController::class, 'home'])->name('home')->middleware('auth');
Route::get('/login', [PageController::class, 'index'])->name('login');
Route::post('/login/post', [AuthController::class, 'login'])->name('login.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('users', [PageController::class,'rules'])->name('users-rules');
Route::get('add-users', [PageController::class,'addUserRules'])->name('add-users-rules');
Route::get('edit-users/{id}', [PageController::class,'editUserRules'])->name('edit-users-rules');

Route::post('/users-rules', [UserController::class, 'store'])->name('users-rules.store');
Route::put('users-rules/{id}', [UserController::class, 'update'])->name('users-rules.update');
Route::delete('/users-rules/{id}', [UserController::class, 'destroy'])->name('users-rules.destroy');
