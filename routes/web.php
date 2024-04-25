<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\LocationController;
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

Route::get('/', [homeController::class, 'Userhome'])->name('home');
Route::get("/User/home", [homeController::class, 'Userhome'])->name('User.home')->middleware('auth');

// Route registrasi
Route::get('/register', 'App\Http\Controllers\AuthController@showRegistrationForm')->name('register');
Route::post('/register', 'App\Http\Controllers\AuthController@process')->name('register.process');

// Route login
Route::get('/login', 'App\Http\Controllers\AuthController@showLoginForm')->name('login');
Route::post('/login', 'App\Http\Controllers\AuthController@login')->name('login.process');

//Route Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route Reservation
Route::get('/reservation', [ReservationController::class, 'index'])->name('reservation');
Route::post('/reservation', 'App\Http\Controllers\ReservationController@store')->name('reservation.store');

//Route Ulasan
Route::get('/ulasan', 'App\Http\Controllers\UlasanController@UserUlasan')->name('User.ulasan');
Route::post('/ulasan', 'App\Http\Controllers\UlasanController@ulasan')->name('ulasan');

//Route Lokasi
Route::get('/location', 'App\Http\Controllers\LocationController@show')->name('location');
