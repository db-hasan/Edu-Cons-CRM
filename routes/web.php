<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ViewersDashboardController;
use App\Http\Controllers\AdminDashboardController;
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
    Route::get('degreemapping-view/{id}',[DegreeMappingController::class,'viewdegreemapping'])->name('degreemapping.view');

    Route::get('subjectmapping-index',[SubjectMappingController::class, 'indexsubjectmapping'])->name('subjectmapping.index');
    Route::get('subjectmapping-insert',[SubjectMappingController::class,'createsubjectmapping'])->name('subjectmapping.create');
    Route::post('subjectmapping-insert',[SubjectMappingController::class,'storesubjectmapping'])->name('subjectmapping.store');
    Route::get('subjectmapping-update/{id}',[SubjectMappingController::class,'editsubjectmapping'])->name('subjectmapping.edit');
    Route::put('subjectmapping-update/{id}',[SubjectMappingController::class,'updatesubjectmapping'])->name('subjectmapping.update');
    Route::get('subjectmapping-view/{id}',[SubjectMappingController::class,'viewsubjectmapping'])->name('subjectmapping.view');
    
    Route::get('branch-index',[BranchController::class, 'indexbranch'])->name('branch.index');
    Route::get('branch-insert',[BranchController::class,'createbranch'])->name('branch.create');
    Route::post('branch-insert',[BranchController::class,'storebranch'])->name('branch.store');
    Route::get('branch-update/{id}',[BranchController::class,'editbranch'])->name('branch.edit');
    Route::put('branch-update/{id}',[BranchController::class,'updatebranch'])->name('branch.update');

    Route::get('lead-index',[LeadController::class, 'indexlead'])->name('lead.index');
    Route::get('lead-insert',[LeadController::class,'createlead'])->name('lead.create');
    Route::post('lead-insert',[LeadController::class,'storelead'])->name('lead.store');
    Route::get('lead-update/{id}',[LeadController::class,'editlead'])->name('lead.edit');
    Route::put('lead-update/{id}',[LeadController::class,'updatelead'])->name('lead.update');

    Route::get('upload-index',[UploadController::class, 'indexupload'])->name('upload.index');
    Route::get('upload-insert',[UploadController::class,'createupload'])->name('upload.create');
    Route::post('upload-insert',[UploadController::class,'storeupload'])->name('upload.store');
    Route::get('upload-update/{id}',[UploadController::class,'editupload'])->name('upload.edit');
    Route::put('upload-update/{id}',[UploadController::class,'updateupload'])->name('upload.update');
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