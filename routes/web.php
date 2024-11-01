<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ViewersDashboardController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\BranchController;



use App\Http\Controllers\MarketingDashboardController;
use App\Http\Controllers\ManagerDashboardController;
use App\Http\Controllers\ConsultantDashboardController;
use App\Http\Controllers\ComplianceDashboardController;





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

Route::middleware(['auth', 'role:viewers'])->group(function (){
    Route::get('/viewers-dashboard',[ViwersDashboardController::class,'viewersdashboard'])->name('viewers.dashboard');
});

Route::middleware(['auth', 'role:admin'])->group(function (){
    Route::get('/admin-dashboard',[AdminDashboardController::class,'admindashboard'])->name('admin.dashboard');
    
    Route::get('user-index',[AuthController::class, 'indexuser'])->name('user.index');
    Route::get('user-insert',[AuthController::class,'createuser'])->name('user.create');
    Route::post('user-insert',[AuthController::class,'storeuser'])->name('user.store');
    Route::get('user-update/{id}',[AuthController::class,'edituser'])->name('user.edit');
    Route::put('user-update/{id}',[AuthController::class,'updateuser'])->name('user.update');
    
    Route::get('branch-index',[BranchController::class, 'indexbranch'])->name('branch.index');
    Route::get('branch-insert',[BranchController::class,'createbranch'])->name('branch.create');
    Route::post('branch-insert',[BranchController::class,'storebranch'])->name('branch.store');
    Route::get('branch-update/{id}',[BranchController::class,'editbranch'])->name('branch.edit');
    Route::put('branch-update/{id}',[BranchController::class,'updatebranch'])->name('branch.update');
});





Route::middleware(['auth', 'role:marketing'])->group(function (){
    Route::get('/marketing-dashboard',[MarketingDashboardController::class,'marketingdashboard'])->name('marketing.dashboard');
});


Route::middleware(['auth', 'role:manager'])->group(function (){
    Route::get('/manager-dashboard',[ManagerDashboardController::class,'managerdashboard'])->name('manager.dashboard');
});


Route::middleware(['auth', 'role:consultant'])->group(function (){
    Route::get('/consultant-dashboard',[ConsultantDashboardController::class,'consultantdashboard'])->name('consultant.dashboard');

});


Route::middleware(['auth', 'role:compliance'])->group(function (){
    Route::get('/compliance-dashboard',[ComplianceDashboardController::class,'compliancedashboard'])->name('compliance.dashboard');
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