<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\UniversityController;
use App\Http\Controllers\CampusController;
use App\Http\Controllers\DegreeController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\DegreeMappingController;
use App\Http\Controllers\SubjectMappingController;






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

Route::group(['middleware'=>'isAdmin'],function(){
    Route::get('/admin-dashboard',[AdminDashboardController::class,'admindashboard'])->name('admin.dashboard');
    
    Route::get('user-index',[AuthController::class, 'indexuser'])->name('user.index');
    Route::get('user-insert',[AuthController::class,'createuser'])->name('user.create');
    Route::post('user-insert',[AuthController::class,'storeuser'])->name('user.store');
    Route::get('user-update/{id}',[AuthController::class,'edituser'])->name('user.edit');
    Route::put('user-update/{id}',[AuthController::class,'updateuser'])->name('user.update');

    Route::get('role-index',[RoleController::class, 'indexrole'])->name('role.index');
    Route::get('role-insert',[RoleController::class,'createrole'])->name('role.create');
    Route::post('role-insert',[RoleController::class,'storerole'])->name('role.store');
    Route::get('role-update/{id}',[RoleController::class,'editrole'])->name('role.edit');
    Route::put('role-update/{id}',[RoleController::class,'updaterole'])->name('role.update');

    Route::get('location-index',[BranchController::class, 'indexLocation'])->name('location.index');
    Route::get('location-insert',[BranchController::class, 'createLocation'])->name('location.create');

    Route::get('region-index',[BranchController::class, 'indexRegion'])->name('region.index');
    Route::get('region-insert',[BranchController::class, 'createRegion'])->name('region.create');

    Route::get('country-index',[UniversityController::class, 'indexCountry'])->name('country.index');
    Route::get('country-insert',[UniversityController::class, 'createCountry'])->name('country.create');

    Route::get('university-index',[UniversityController::class, 'indexUniversity'])->name('university.index');
    Route::get('university-insert',[UniversityController::class, 'createUniversity'])->name('university.create');



    Route::get('lead-index',[LeadController::class, 'indexlead'])->name('lead.index');
    // Route::get('lead-insert',[LeadController::class,'createlead'])->name('lead.create');
    // Route::post('lead-insert',[LeadController::class,'storelead'])->name('lead.store');
    Route::get('lead-update/',[LeadController::class,'editlead'])->name('lead.edit');
    Route::put('lead-update/{id}',[LeadController::class,'updatelead'])->name('lead.update');
    Route::get('lead-view/',[LeadController::class,'viewlead'])->name('lead.view');

    Route::get('upload.lead-assign-index',[UploadController::class, 'indexAssignLeadUpload'])->name('upload.lead.assign.index');
    Route::post('upload.lead-assign-index',[UploadController::class, 'createAssignLeadUpload'])->name('upload.lead.assign.store');
    Route::get('upload.bulk-lead-insert',[UploadController::class,'creatBulkLeadUpload'])->name('upload.lead.bulk.create');
    Route::post('upload.bulk-lead-insert',[UploadController::class,'storeBulkLeadUpload'])->name('upload.lead.bulk..store');
    Route::get('upload.single-lead-insert',[UploadController::class,'createSingleLeadUpload'])->name('upload.lead.single.create');
    Route::post('upload.single-lead-insert',[UploadController::class,'storeSingleLeadUpload'])->name('upload.lead.single.store');

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('profle-update',[AuthController::class,'profileupdate'])->name('profle.update');
    Route::post('profle-update',[AuthController::class,'passwordupdate'])->name('password.update');
});