<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\SaleController;
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
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [FrontEndController::class, 'Userhome'])->name('home');
Route::get("/User/home", [FrontEndController::class, 'Userhome'])->name('User.home')->middleware('auth');

Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'process']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
// Route::get('/change-password', [AuthController::class, 'changePassword']);
// Route::post('/change-password', [AuthController::class, 'processChangePassword']);

Route::get('/reservation', [ReservationController::class, 'index'])->name('reservation');
Route::post('/reservation', [ReservationController::class, 'store'])->name('reservation.store');

Route::get('/masukan', [FeedbackController::class, 'UserFeedback'])->name('User.masukan');
Route::post('/masukan', [FeedbackController::class, 'feedback'])->name('masukan');

Route::get('/pesanan', [FrontendController::class, 'pesanan'])->name('pesanan');
Route::post('/addpesanan', [FrontEndController::class, 'addpesanan'])->name('addpesanan');
Route::get('/menu/{slug}',[FrontEndController::class, 'Category'])->name('category');
Route::get('/search', [FrontEndController::class, 'search'])->name('search');

Route::group(['middleware' => 'admin'], function () {
    //Admin
    Route::get('/Admin/welcome', function () {
        return view('Admin/welcome');
    });

    Route::get('/all/pesanan', [FrontEndController::class, 'AllPesanan'])->name('all.pesanan');
    Route::get('/all/pesanan/{id}', [FrontEndController::class, 'statuspemesanan'])->name('status');


    // Routes for CategoryController
    Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/category', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/category/{id}', [CategoryController::class, 'show'])->name('category.show');
    Route::get('/category/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('/category/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

    Route::resource('/post', PostController::class);

});

Route::delete('/pesanan/{id}', [FrontEndController::class, 'deletePesanan'])->name('delete.pesanan');
Route::get('/admin/sale/create', [SaleController::class, 'create'])->name('admin.sale.create');
Route::get('/admin/sale', [SaleController::class, 'index'])->name('admin.sale');
Route::post('/admin/sale', [SaleController::class, 'store'])->name('sale.store');
Route::get('/admin/sale/{id}', [SaleController::class, 'show'])->name('sale.show');
Route::get('/admin/sale/{id}/edit', [SaleController::class, 'edit'])->name('sale.edit');
Route::put('/admin/sale/{id}', [SaleController::class, 'update'])->name('sale.update');
Route::delete('/admin/sale/{id}', [SaleController::class, 'destroy'])->name('sale.destroy');

