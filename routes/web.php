<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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

Route::middleware(['auth'])->group(function (){
    Route::get('/admin-dashboard',[AdminDashboardController::class,'admindashboard'])->name('admin.dashboard');
    
    Route::get('user-index',[AuthController::class, 'indexuser'])->name('user.index');
    Route::get('user-insert',[AuthController::class,'createuser'])->name('user.create');
    Route::post('user-insert',[AuthController::class,'storeuser'])->name('user.store');
    Route::get('user-update/{id}',[AuthController::class,'edituser'])->name('user.edit');
    Route::put('user-update/{id}',[AuthController::class,'updateuser'])->name('user.update');

    Route::get('studentcountry-index',[LocationController::class, 'indexstudentcountry'])->name('studentcountry.index');
    Route::get('studentcountry-insert',[LocationController::class,'createstudentcountry'])->name('studentcountry.create');
    Route::post('studentcountry-insert',[LocationController::class,'storestudentcountry'])->name('studentcountry.store');
    Route::get('studentcountry-update/{id}',[LocationController::class,'editstudentcountry'])->name('studentcountry.edit');
    Route::put('studentcountry-update/{id}',[LocationController::class,'updatestudentcountry'])->name('studentcountry.update');

    Route::get('studentstate-index',[LocationController::class, 'indexstudentstate'])->name('studentstate.index');
    Route::get('studentstate-insert',[LocationController::class,'createstudentstate'])->name('studentstate.create');
    Route::post('studentstate-insert',[LocationController::class,'storestudentstate'])->name('studentstate.store');
    Route::get('studentstate-update/{id}',[LocationController::class,'editstudentstate'])->name('studentstate.edit');
    Route::put('studentstate-update/{id}',[LocationController::class,'updatestudentstate'])->name('studentstate.update');

    Route::get('studentzilla-index',[LocationController::class, 'indexstudentzilla'])->name('studentzilla.index');
    Route::get('studentzilla-insert',[LocationController::class,'createstudentzilla'])->name('studentzilla.create');
    Route::post('studentzilla-insert',[LocationController::class,'storestudentzilla'])->name('studentzilla.store');
    Route::get('studentzilla-update/{id}',[LocationController::class,'editstudentzilla'])->name('studentzilla.edit');
    Route::put('studentzilla-update/{id}',[LocationController::class,'updatestudentzilla'])->name('studentzilla.update');

    Route::get('degree-index',[DegreeController::class, 'indexdegree'])->name('degree.index');
    Route::get('degree-insert',[DegreeController::class,'createdegree'])->name('degree.create');
    Route::post('degree-insert',[DegreeController::class,'storedegree'])->name('degree.store');
    Route::get('degree-update/{id}',[DegreeController::class,'editdegree'])->name('degree.edit');
    Route::put('degree-update/{id}',[DegreeController::class,'updatedegree'])->name('degree.update');

    Route::get('subject-index',[SubjectController::class, 'indexsubject'])->name('subject.index');
    Route::get('subject-insert',[SubjectController::class,'createsubject'])->name('subject.create');
    Route::post('subject-insert',[SubjectController::class,'storesubject'])->name('subject.store');
    Route::get('subject-update/{id}',[SubjectController::class,'editsubject'])->name('subject.edit');
    Route::put('subject-update/{id}',[SubjectController::class,'updatesubject'])->name('subject.update');

    Route::get('country-index',[CountryController::class, 'indexcountry'])->name('country.index');
    Route::get('country-insert',[CountryController::class,'createcountry'])->name('country.create');
    Route::post('country-insert',[CountryController::class,'storecountry'])->name('country.store');
    Route::get('country-update/{id}',[CountryController::class,'editcountry'])->name('country.edit');
    Route::put('country-update/{id}',[CountryController::class,'updatecountry'])->name('country.update');

    Route::get('state-index',[StateController::class, 'indexstate'])->name('state.index');
    Route::get('state-insert',[StateController::class,'createstate'])->name('state.create');
    Route::post('state-insert',[StateController::class,'storestate'])->name('state.store');
    Route::get('state-update/{id}',[StateController::class,'editstate'])->name('state.edit');
    Route::put('state-update/{id}',[StateController::class,'updatestate'])->name('state.update');

    Route::get('university-index',[UniversityController::class, 'indexuniversity'])->name('university.index');
    Route::get('university-insert',[UniversityController::class,'createuniversity'])->name('university.create');
    Route::post('university-insert',[UniversityController::class,'storeuniversity'])->name('university.store');
    Route::get('university-update/{id}',[UniversityController::class,'edituniversity'])->name('university.edit');
    Route::put('university-update/{id}',[UniversityController::class,'updateuniversity'])->name('university.update');

    Route::get('campus-index',[CampusController::class, 'indexcampus'])->name('campus.index');
    Route::get('campus-insert',[CampusController::class,'createcampus'])->name('campus.create');
    Route::post('campus-insert',[CampusController::class,'storecampus'])->name('campus.store');
    Route::get('campus-update/{id}',[CampusController::class,'editcampus'])->name('campus.edit');
    Route::put('campus-update/{id}',[CampusController::class,'updatecampus'])->name('campus.update');

    Route::get('degreemapping-index',[DegreeMappingController::class, 'indexdegreemapping'])->name('degreemapping.index');
    Route::get('degreemapping-insert',[DegreeMappingController::class,'createdegreemapping'])->name('degreemapping.create');
    Route::post('degreemapping-insert',[DegreeMappingController::class,'storedegreemapping'])->name('degreemapping.store');
    Route::get('degreemapping-update/{id}',[DegreeMappingController::class,'editdegreemapping'])->name('degreemapping.edit');
    Route::put('degreemapping-update/{id}',[DegreeMappingController::class,'updatedegreemapping'])->name('degreemapping.update');

    Route::get('subjectmapping-index',[SubjectMappingController::class, 'indexsubjectmapping'])->name('subjectmapping.index');
    Route::get('subjectmapping-insert',[SubjectMappingController::class,'createsubjectmapping'])->name('subjectmapping.create');
    Route::post('subjectmapping-insert',[SubjectMappingController::class,'storesubjectmapping'])->name('subjectmapping.store');
    Route::get('subjectmapping-update/{id}',[SubjectMappingController::class,'editsubjectmapping'])->name('subjectmapping.edit');
    Route::put('subjectmapping-update/{id}',[SubjectMappingController::class,'updatesubjectmapping'])->name('subjectmapping.update');
    Route::get('subjectmapping-view/{id}',[SubjectMappingController::class,'viewsubjectmapping'])->name('subjectmapping.view');

    Route::get('branchstate-index',[BranchController::class, 'indexbranchstate'])->name('branchstate.index');
    Route::get('branchstate-insert',[BranchController::class,'createbranchstate'])->name('branchstate.create');
    Route::post('branchstate-insert',[BranchController::class,'storebranchstate'])->name('branchstate.store');
    Route::get('branchstate-update/{id}',[BranchController::class,'editbranchstate'])->name('branchstate.edit');
    Route::put('branchstate-update/{id}',[BranchController::class,'updatebranchstate'])->name('branchstate.update');

    Route::get('branchcountry-index',[BranchController::class, 'indexbranchcountry'])->name('branchcountry.index');
    Route::get('branchcountry-insert',[BranchController::class,'createbranchcountry'])->name('branchcountry.create');
    Route::post('branchcountry-insert',[BranchController::class,'storebranchcountry'])->name('branchcountry.store');
    Route::get('branchcountry-update/{id}',[BranchController::class,'editbranchcountry'])->name('branchcountry.edit');
    Route::put('branchcountry-update/{id}',[BranchController::class,'updatebranchcountry'])->name('branchcountry.update');

    Route::get('branchzilla-index',[BranchController::class, 'indexbranchzilla'])->name('branchzilla.index');
    Route::get('branchzilla-insert',[BranchController::class,'createbranchzilla'])->name('branchzilla.create');
    Route::post('branchzilla-insert',[BranchController::class,'storebranchzilla'])->name('branchzilla.store');
    Route::get('branchzilla-update/{id}',[BranchController::class,'editbranchzilla'])->name('branchzilla.edit');
    Route::put('branchzilla-update/{id}',[BranchController::class,'updatebranchzilla'])->name('branchzilla.update');
    
    Route::get('branch-index',[BranchController::class, 'indexbranch'])->name('branch.index');
    Route::get('branch-insert',[BranchController::class,'createbranch'])->name('branch.create');
    Route::post('branch-insert',[BranchController::class,'storebranch'])->name('branch.store');
    Route::get('branch-update/{id}',[BranchController::class,'editbranch'])->name('branch.edit');
    Route::put('branch-update/{id}',[BranchController::class,'updatebranch'])->name('branch.update');

    Route::get('lead-index',[LeadController::class, 'indexlead'])->name('lead.index');
    Route::get('lead-insert',[LeadController::class,'createlead'])->name('lead.create');
    Route::post('lead-insert',[LeadController::class,'storelead'])->name('lead.store');
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