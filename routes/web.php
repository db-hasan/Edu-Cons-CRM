<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\RoleManageControler;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\DegreeController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\UniversityController;
use App\Http\Controllers\UniversityDetailsController;



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

    Route::get('country-manager-index',[RoleManageControler::class, 'indexCountryManager'])->name('country.manager.index');
    Route::get('country-manager-insert',[RoleManageControler::class, 'createCountryManager'])->name('country.manager.create');
    Route::post('country-manager-insert',[RoleManageControler::class,'storeCountryManager'])->name('country.manager.store');
    Route::get('country-manager-update',[RoleManageControler::class,'editCountryManager'])->name('country.manager.edit');
    Route::put('country-manager-update',[RoleManageControler::class,'updateCountryManager'])->name('country.manager.update');

    Route::get('region-manager-index',[RoleManageControler::class, 'indexRegionManager'])->name('region.manager.index');
    Route::get('region-manager-insert',[RoleManageControler::class, 'createRegionManager'])->name('region.manager.create');
    Route::post('region-manager-insert',[RoleManageControler::class,'storeRegionManager'])->name('region.manager.store');
    Route::get('region-manager-update',[RoleManageControler::class,'editRegionManager'])->name('region.manager.edit');
    Route::put('region-manager-update',[RoleManageControler::class,'updateRegionManager'])->name('region.manager.update');

    Route::get('agent-manager-index',[RoleManageControler::class, 'indexAgentManager'])->name('agent.manager.index');
    Route::get('agent-manager-insert',[RoleManageControler::class, 'createAgentManager'])->name('agent.manager.create');
    Route::post('agent-manager-insert',[RoleManageControler::class,'storeAgentManager'])->name('agent.manager.store');
    Route::get('agent-manager-update',[RoleManageControler::class,'editAgentManager'])->name('agent.manager.edit');
    Route::put('agent-manager-update',[RoleManageControler::class,'updateAgentManager'])->name('agent.manager.update');

    Route::get('agent-assign-index',[RoleManageControler::class, 'indexAgentAssign'])->name('agent.assign.index');
    Route::get('agent-assign-insert',[RoleManageControler::class, 'createAgentAssign'])->name('agent.assign.create');
    Route::post('agent-assign-insert',[RoleManageControler::class,'storeAgentAssign'])->name('agent.assign.store');
    Route::get('agent-assign-update',[RoleManageControler::class,'editAgentAssign'])->name('agent.assign.edit');
    Route::put('agent-assign-update',[RoleManageControler::class,'updateAgentAssign'])->name('agent.assign.update');

    Route::get('branch-manager-index',[RoleManageControler::class, 'indexBranchManager'])->name('branch.manager.index');
    Route::get('branch-manager-insert',[RoleManageControler::class, 'createBranchManager'])->name('branch.manager.create');
    Route::post('branch-manager-insert',[RoleManageControler::class,'storeBranchManager'])->name('branch.manager.store');
    Route::get('branch-manager-update',[RoleManageControler::class,'editBranchManager'])->name('branch.manager.edit');
    Route::put('branch-manager-update',[RoleManageControler::class,'updateBranchManager'])->name('branch.manager.update');

    Route::get('consultant-assign-index',[RoleManageControler::class, 'indexConsultantAssign'])->name('consultant.assign.index');
    Route::get('consultant-assign-insert',[RoleManageControler::class, 'createConsultantAssign'])->name('consultant.assign.create');
    Route::post('consultant-assign-insert',[RoleManageControler::class,'storeConsultantAssign'])->name('consultant.assign.store');
    Route::get('consultant-assign-update',[RoleManageControler::class,'editConsultantAssign'])->name('consultant.assign.edit');
    Route::put('consultant-assign-update',[RoleManageControler::class,'updateConsultantAssign'])->name('consultant.assign.update');


    Route::get('country-index',[LocationController::class, 'indexCountry'])->name('country.index');
    Route::get('country-insert',[LocationController::class, 'createCountry'])->name('country.create');

    Route::get('state-index',[LocationController::class, 'indexState'])->name('state.index');
    Route::get('state-insert',[LocationController::class, 'createState'])->name('state.create');

    Route::get('city-index',[LocationController::class, 'indexCity'])->name('city.index');
    Route::get('city-insert',[LocationController::class, 'createCity'])->name('city.create');

    Route::get('region-index',[BranchController::class, 'indexRegion'])->name('region.index');
    Route::get('region-insert',[BranchController::class, 'createRegion'])->name('region.create');
    Route::post('region-insert',[BranchController::class,'storeRegion'])->name('region.store');
    Route::get('region-update',[BranchController::class,'editRegion'])->name('region.edit');
    Route::put('region-update',[BranchController::class,'updateRegion'])->name('region.update');

    Route::get('branch-index',[BranchController::class, 'indexBranch'])->name('branch.index');
    Route::get('branch-insert',[BranchController::class, 'createBranch'])->name('branch.create');
    Route::post('branch-insert',[BranchController::class,'storeBranch'])->name('branch.store');
    Route::get('branch-update',[BranchController::class,'editBranch'])->name('branch.edit');
    Route::put('branch-update',[BranchController::class,'updateBranch'])->name('branch.update');

    Route::get('degree-index',[DegreeController::class, 'indexDegree'])->name('degree.index');
    Route::get('degree-insert',[DegreeController::class,'createDegree'])->name('degree.create');
    Route::post('degree-insert',[DegreeController::class,'storeDegree'])->name('degree.store');
    Route::get('degree-update',[DegreeController::class,'editDegree'])->name('degree.edit');
    Route::put('degree-update',[DegreeController::class,'updateDegree'])->name('degree.update');

    Route::get('language-index',[LanguageController::class, 'indexLanguage'])->name('language.index');
    Route::get('language-insert',[LanguageController::class,'createLanguage'])->name('language.create');
    Route::post('language-insert',[LanguageController::class,'storeLanguage'])->name('language.store');
    Route::get('language-update',[LanguageController::class,'editLanguage'])->name('language.edit');
    Route::put('language-update',[LanguageController::class,'updateLanguage'])->name('language.update');

    Route::get('university-index',[UniversityController::class, 'indexUniversity'])->name('university.index');
    Route::get('university-insert',[UniversityController::class, 'createUniversity'])->name('university.create');
    Route::post('university-insert',[UniversityController::class, 'storeUniversity'])->name('university.store');
    Route::get('university-update',[UniversityController::class, 'editUniversity'])->name('university.edit');
    Route::put('university-update',[UniversityController::class, 'updateUniversity'])->name('university.update');
    Route::get('university-view',[UniversityController::class, 'viewUniversity'])->name('university.view');

    Route::get('university-course-view',[UniversityController::class, 'viewUniversityCourse'])->name('university.course.view');
    Route::get('university-course-edit',[UniversityController::class, 'editUniversityCourse'])->name('university.course.edit');
    Route::put('university-course-update',[UniversityController::class, 'updateUniversityCourse'])->name('university.course.update');

    Route::get('university-details-insert',[UniversityDetailsController::class, 'createUniversityiDetails'])->name('university.details.create');
    Route::get('course-details-insert',[UniversityDetailsController::class, 'createCourseiDetails'])->name('course.details.create');



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