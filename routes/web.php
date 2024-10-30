<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\BranchController;
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


Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/', [AuthController::class, 'adminlogin'])->name('admin.login');

Route::middleware(['auth', 'role:admin,visitor'])->group(function (){
    Route::get('/admin-dashboard',[AdminDashboardController::class,'admindashboard'])->name('admin.dashboard');
    
    Route::get('branch-index',[BranchController::class, 'indexbranch'])->name('branch.index');
    Route::get('branch-insert',[BranchController::class,'createbranch'])->name('branch.create');
    Route::post('branch-insert',[BranchController::class,'storebranch'])->name('branch.store');
    Route::get('branch-update/{id}',[BranchController::class,'editbranch'])->name('branch.edit');
    Route::put('branch-update/{id}',[BranchController::class,'updatebranch'])->name('branch.update');
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