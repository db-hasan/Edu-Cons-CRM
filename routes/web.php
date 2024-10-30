<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\VisitorDashboardController;
use App\Http\Controllers\VendorDashboardController;
use App\Http\Controllers\SellerDashboardController;
use App\Http\Controllers\CheckerDashboardController;

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
    return view('frontend/booking');
});


Route::get('/admin-login', [AuthController::class, 'login'])->name('login');
Route::post('/admin-login', [AuthController::class, 'adminlogin'])->name('admin.login');

Route::middleware(['auth', 'role:admin,visitor'])->group(function (){
    Route::get('/admin-dashboard',[AdminDashboardController::class,'admindashboard'])->name('admin.dashboard');
});


Route::middleware(['auth', 'role:visitor'])->group(function (){
    Route::get('/visitor-dashboard',[VisitorDashboardController::class,'visitodrashboard'])->name('visitor.dashboard');
});


Route::middleware(['auth', 'role:vendor'])->group(function (){
    Route::get('/vendor-dashboard',[VendorDashboardController::class,'vendrodashboard'])->name('vendor.dashboard');
});


Route::middleware(['auth', 'role:seller'])->group(function (){
    Route::get('/seller-dashboard',[SellerDashboardController::class,'sellerdashboard'])->name('seller.dashboard');

});


Route::middleware(['auth', 'role:checker'])->group(function (){
    Route::get('/checker-dashboard',[CheckerDashboardController::class,'checkerdashboard'])->name('checker.dashboard');
});


Route::middleware(['auth'])->group(function (){   
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('profle-update',[AuthController::class,'profileupdate'])->name('profle.update');
    Route::post('profle-update',[AuthController::class,'passwordupdate'])->name('password.update');
});




























// Route::group(['middleware'=>'auth'],function(){
//     Route::get('/admin-dashboard',[AdminDashboardController::class,'admindashboard'])->name('admin.dashboard');
//     Route::get('/vendor-dashboard',[VendorDashboardController::class,'vendrodashboard'])->name('vendor.dashboard');
//     Route::get('/seller-dashboard',[SellerDashboardController::class,'sellerdashboard'])->name('seller.dashboard');
//     Route::get('/checker-dashboard',[CheckerDashboardController::class,'checkerdashboard'])->name('checker.dashboard');
    
//     Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
//     Route::get('profle-update',[AuthController::class,'profileupdate'])->name('profle.update');
//     Route::post('profle-update',[AuthController::class,'passwordupdate'])->name('password.update');
// });