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
use App\Http\Controllers\admin_productController;
use App\Http\Controllers\commentController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\admin_userController;
use App\Http\Controllers\PesananController;

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



Route::prefix('/auth')->group(function () {
    Route::prefix('/sign')->group(function () {
        Route::get('/', function () {
            return view('sign');
        });
        Route::post('/', [admin_userController::class, 'store']);
    });
    Route::prefix('login')->group(function () {
        Route::get('/', function () {
            return view('login');
        });
        Route::post('/', [loginController::class, 'login']);
    });
    Route::get('/logout', [loginController::class, 'logout'])->middleware('myAuth');
});

Route::prefix('/admin')->group(function () {
    Route::prefix('/user')->group(function () {
        Route::get('/', [admin_userController::class, 'index'])->middleware('admin');
        Route::post('/', [admin_userController::class, 'store'])->middleware('admin');
        Route::get('/{id}', [admin_userController::class, 'destroy'])->middleware('admin');
    });
    Route::prefix('/product')->group(function () {
        Route::get('/', [admin_productController::class, 'index'])->middleware('admin');
        Route::post('/', [admin_productController::class, 'store'])->middleware('admin');
        Route::put('/{id}', [admin_productController::class, 'update'])->middleware('admin');
        Route::get('/{id}', [admin_productController::class, 'destroy'])->middleware('admin');
    });
    Route::prefix('/pesanan')->group(function () {
        Route::get('/', [PesananController::class, 'index'])->middleware('admin');
    });
});

Route::prefix('/profile')->group(function () {
    Route::get('/', [profileController::class, 'showProfilePage'])->middleware('myAuth');
    Route::get('/{id}', [editprofileController::class, 'show'])->middleware('myAuth');
    Route::put('/{id}', [editprofileController::class, 'update'])->middleware('myAuth');
});

Route::get('/beranda', [berandaController::class, 'index'])->middleware('myAuth');

Route::prefix('/prewed')->group(function () {
    Route::get('/', [PrewedController::class, 'index'])->middleware('myAuth');
    Route::get('/{id}', [PrewedController::class, 'detail'])->middleware('myAuth');
});

Route::prefix('/decor')->group(function () {
    Route::get('/', [decorController::class, 'index'])->middleware('myAuth');
    Route::get('/{id}', [decorController::class, 'detail'])->middleware('myAuth');
});

Route::prefix('/package')->group(function () {
    Route::get('/', [packageController::class, 'index'])->middleware('myAuth');
    Route::post('/', [packageController::class, 'store'])->middleware('myAuth');
    Route::get('/{id}', [packageController::class, 'detail'])->middleware('myAuth');
});

Route::prefix('/booking')->group(function () {
    Route::get('/{category}', [bookingController::class, 'index'])->middleware('myAuth');
    Route::post('/{category}', [bookingController::class, 'store'])->middleware('myAuth');
});

Route::prefix('/confirm')->group(function () {
    Route::get('/{id}', [confirmController::class, 'index'])->middleware('myAuth');
    Route::post('/{id}', [confirmController::class, 'store'])->middleware('myAuth');
});
Route::resource('admin_web', adminController::class);
Route::resource('admin/create', adminController::class);
Route::resource('admin_web/edit', adminController::class);
Route::post('admin_web/', [adminController::class, 'store'])->name('admin.create');
Route::put('admin_web/edit/{id}', [adminController::class, 'update']);
Route::get('admin_web/delete/{id}', [adminController::class, 'destroy']);
Route::get('/detail', [detailController::class, 'index']);
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
// Route::get('/admin_tema', [admin_temaController::class, 'index']);
