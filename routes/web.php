<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\signController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\editprofileController;
use App\Http\Controllers\berandaController;
use App\Http\Controllers\PrewedController;
use App\Http\Controllers\detailController;
use App\Http\Controllers\bookingController;
use App\Http\Controllers\confirmController;
use App\Http\Controllers\decorController;
use App\Http\Controllers\detail2Controller;
use App\Http\Controllers\booking2Controller;
use App\Http\Controllers\packageController;
use App\Http\Controllers\detail3Controller;
use App\Http\Controllers\booking3Controller;
use App\Http\Controllers\admin2Controller;
use App\Http\Controllers\admin_updateController;
use App\Http\Controllers\admin_prewedController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\commentController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\admin_userController;





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
    return view('index');
});

Route::resource('admin_web', adminController::class);
Route::resource('admin/create', adminController::class);
Route::resource('admin_web/edit', adminController::class);
Route::post('admin_web/', [adminController::class, 'store'])->name('admin.create');
Route::put('admin_web/edit/{id}', [adminController::class, 'update']);
Route::get('admin_web/delete/{id}', [adminController::class, 'destroy']);
Route::get('/login', [loginController::class, 'showLoginForm'])->name('/login');
Route::get('/sign', [SignController::class, 'showSignPage'])->name('sign');
Route::get('/profile', [profileController::class, 'showProfilePage'])->name('profile');
Route::get('/edit_profile', [editprofileController::class, 'show']);
Route::get('/beranda', [berandaController::class, 'index']);
Route::get('/prewed', [PrewedController::class, 'index']);
Route::get('/detail', [detailController::class, 'index']);
Route::get('/booking', [bookingController::class, 'index']);
Route::get('/confirm', [confirmController::class, 'index']);
Route::get('/decor', [decorController::class, 'index']);
Route::get('/detail2', [detail2Controller::class, 'index']);
Route::get('/booking2', [booking2Controller::class, 'index']);
Route::get('/package', [packageController::class, 'index']);
Route::get('/detail3', [detail3Controller::class, 'index']);
Route::get('/booking3', [booking3Controller::class, 'index']);
Route::get('/admin', [admin2Controller::class, 'index']);
Route::get('/admin_update', [admin_updateController::class, 'index']);
Route::get('/admin_prewed', [admin_prewedController::class, 'index']);
Route::get('/about', [aboutController::class, 'index']);
Route::get('/comment', [commentController::class, 'index']);
Route::get('/contact', [contactController::class, 'index']);
Route::get('/contact', [contactController::class, 'index']);
Route::get('/admin_user', [admin_userController::class, 'index']);
Route::get('/admin_product', [admin_productController::class, 'index']);
Route::get('/admin_tema', [admin_temaController::class, 'index']);



