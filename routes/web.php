<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ConsultantRoleManagController;
use App\Http\Controllers\AdmissionRoleManagController;
use App\Http\Controllers\ComplianceRoleManagController;
use App\Http\Controllers\MarketingRoleManagController;
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


/*
|--------------------------------------------------------------------------
| Auth start
|--------------------------------------------------------------------------
*/ 
    Route::get('user-index',[AuthController::class, 'indexuser'])->name('user.index');
    Route::get('user-insert',[AuthController::class,'createuser'])->name('user.create');
    Route::post('user-insert',[AuthController::class,'storeuser'])->name('user.store');
    Route::get('user-update/{id}',[AuthController::class,'edituser'])->name('user.edit');
    Route::put('user-update/{id}',[AuthController::class,'updateuser'])->name('user.update');

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('profle-update',[AuthController::class,'profileupdate'])->name('profle.update');
    Route::post('profle-update',[AuthController::class,'passwordupdate'])->name('password.update'); 

/*
|--------------------------------------------------------------------------
| Role start
|--------------------------------------------------------------------------
*/ 
    Route::get('role-index',[RoleController::class, 'indexrole'])->name('role.index');
    Route::get('role-insert',[RoleController::class,'createrole'])->name('role.create');
    Route::post('role-insert',[RoleController::class,'storerole'])->name('role.store');
    Route::get('role-update/{id}',[RoleController::class,'editrole'])->name('role.edit');
    Route::put('role-update/{id}',[RoleController::class,'updaterole'])->name('role.update');


/*
|--------------------------------------------------------------------------
| Consultant assign start
|--------------------------------------------------------------------------
*/
    Route::get('country-manager-index',[ConsultantRoleManagController::class, 'indexCountryManager'])->name('country.manager.index');
    Route::get('country-manager-insert',[ConsultantRoleManagController::class, 'createCountryManager'])->name('country.manager.create');
    Route::post('country-manager-insert',[ConsultantRoleManagController::class,'storeCountryManager'])->name('country.manager.store');
    Route::get('country-manager-update',[ConsultantRoleManagController::class,'editCountryManager'])->name('country.manager.edit');
    Route::put('country-manager-update',[ConsultantRoleManagController::class,'updateCountryManager'])->name('country.manager.update');

    Route::get('region-manager-index',[ConsultantRoleManagController::class, 'indexRegionManager'])->name('region.manager.index');
    Route::get('region-manager-insert',[ConsultantRoleManagController::class, 'createRegionManager'])->name('region.manager.create');
    Route::post('region-manager-insert',[ConsultantRoleManagController::class,'storeRegionManager'])->name('region.manager.store');
    Route::get('region-manager-update',[ConsultantRoleManagController::class,'editRegionManager'])->name('region.manager.edit');
    Route::put('region-manager-update',[ConsultantRoleManagController::class,'updateRegionManager'])->name('region.manager.update');

    Route::get('agent-manager-index',[ConsultantRoleManagController::class, 'indexAgentManager'])->name('agent.manager.index');
    Route::get('agent-manager-insert',[ConsultantRoleManagController::class, 'createAgentManager'])->name('agent.manager.create');
    Route::post('agent-manager-insert',[ConsultantRoleManagController::class,'storeAgentManager'])->name('agent.manager.store');
    Route::get('agent-manager-update',[ConsultantRoleManagController::class,'editAgentManager'])->name('agent.manager.edit');
    Route::put('agent-manager-update',[ConsultantRoleManagController::class,'updateAgentManager'])->name('agent.manager.update');

    Route::get('agent-assign-index',[ConsultantRoleManagController::class, 'indexAgentAssign'])->name('agent.assign.index');
    Route::get('agent-assign-insert',[ConsultantRoleManagController::class, 'createAgentAssign'])->name('agent.assign.create');
    Route::post('agent-assign-insert',[ConsultantRoleManagController::class,'storeAgentAssign'])->name('agent.assign.store');
    Route::get('agent-assign-update',[ConsultantRoleManagController::class,'editAgentAssign'])->name('agent.assign.edit');
    Route::put('agent-assign-update',[ConsultantRoleManagController::class,'updateAgentAssign'])->name('agent.assign.update');

    Route::get('branch-manager-index',[ConsultantRoleManagController::class, 'indexBranchManager'])->name('branch.manager.index');
    Route::get('branch-manager-insert',[ConsultantRoleManagController::class, 'createBranchManager'])->name('branch.manager.create');
    Route::post('branch-manager-insert',[ConsultantRoleManagController::class,'storeBranchManager'])->name('branch.manager.store');
    Route::get('branch-manager-update',[ConsultantRoleManagController::class,'editBranchManager'])->name('branch.manager.edit');
    Route::put('branch-manager-update',[ConsultantRoleManagController::class,'updateBranchManager'])->name('branch.manager.update');

    Route::get('consultant-assign-index',[ConsultantRoleManagController::class, 'indexConsultantAssign'])->name('consultant.assign.index');
    Route::get('consultant-assign-insert',[ConsultantRoleManagController::class, 'createConsultantAssign'])->name('consultant.assign.create');
    Route::post('consultant-assign-insert',[ConsultantRoleManagController::class,'storeConsultantAssign'])->name('consultant.assign.store');
    Route::get('consultant-assign-update',[ConsultantRoleManagController::class,'editConsultantAssign'])->name('consultant.assign.edit');
    Route::put('consultant-assign-update',[ConsultantRoleManagController::class,'updateConsultantAssign'])->name('consultant.assign.update');


/*
|--------------------------------------------------------------------------
| Admission assign start
|--------------------------------------------------------------------------
*/
    Route::get('admission-manager-index',[AdmissionRoleManagController::class, 'indexAdmissionManager'])->name('admission.manager.index');
    Route::get('admission-manager-insert',[AdmissionRoleManagController::class, 'createAdmissionManager'])->name('admission.manager.create');
    Route::post('admission-manager-insert',[AdmissionRoleManagController::class,'storeAdmissionManager'])->name('admission.manager.store');
    Route::get('admission-manager-update',[AdmissionRoleManagController::class,'editAdmissionManager'])->name('admission.manager.edit');
    Route::put('admission-manager-update',[AdmissionRoleManagController::class,'updateAdmissionManager'])->name('admission.manager.update');

    Route::get('admission-team-lead-index',[AdmissionRoleManagController::class, 'indexAdmissionTeamLead'])->name('admission.team.lead.index');
    Route::get('admission-team-lead-insert',[AdmissionRoleManagController::class, 'createAdmissionTeamLead'])->name('admission.team.lead.create');
    Route::post('admission-team-lead-insert',[AdmissionRoleManagController::class,'storeAdmissionTeamLead'])->name('admission.team.lead.store');
    Route::get('admission-team-lead-update',[AdmissionRoleManagController::class,'editAdmissionTeamLead'])->name('admission.team.lead.edit');
    Route::put('admission-team-lead-update',[AdmissionRoleManagController::class,'updateAdmissionTeamLead'])->name('admission.team.lead.update');

    Route::get('admission-officer-index',[AdmissionRoleManagController::class, 'indexAdmissionOfficer'])->name('admission.officer.index');
    Route::get('admission-officer-insert',[AdmissionRoleManagController::class, 'createAdmissionOfficer'])->name('admission.officer.create');
    Route::post('admission-officer-insert',[AdmissionRoleManagController::class,'storeAdmissionOfficer'])->name('admission.officer.store');
    Route::get('admission-officer-update',[AdmissionRoleManagController::class,'editAdmissionOfficer'])->name('admission.officer.edit');
    Route::put('admission-officer-update',[AdmissionRoleManagController::class,'updateAdmissionOfficer'])->name('admission.officer.update');


/*
|--------------------------------------------------------------------------
| Compliance assign start
|--------------------------------------------------------------------------
*/
    Route::get('compliance-manager-index',[ComplianceRoleManagController::class, 'indexComplianceManager'])->name('compliance.manager.index');
    Route::get('compliance-manager-insert',[ComplianceRoleManagController::class, 'createComplianceManager'])->name('compliance.manager.create');
    Route::post('compliance-manager-insert',[ComplianceRoleManagController::class,'storeComplianceManager'])->name('compliance.manager.store');
    Route::get('compliance-manager-update',[ComplianceRoleManagController::class,'editComplianceManager'])->name('compliance.manager.edit');
    Route::put('compliance-manager-update',[ComplianceRoleManagController::class,'updatecomplianceManager'])->name('compliance.manager.update');

    Route::get('compliance-team-lead-index',[ComplianceRoleManagController::class, 'indexComplianceTeamLead'])->name('compliance.team.lead.index');
    Route::get('compliance-team-lead-insert',[ComplianceRoleManagController::class, 'createComplianceTeamLead'])->name('compliance.team.lead.create');
    Route::post('compliance-team-lead-insert',[ComplianceRoleManagController::class,'storeComplianceTeamLead'])->name('compliance.team.lead.store');
    Route::get('compliance-team-lead-update',[ComplianceRoleManagController::class,'editComplianceTeamLead'])->name('compliance.team.lead.edit');
    Route::put('compliance-team-lead-update',[ComplianceRoleManagController::class,'updateComplianceTeamLead'])->name('compliance.team.lead.update');

    Route::get('compliance-officer-index',[ComplianceRoleManagController::class, 'indexComplianceOfficer'])->name('compliance.officer.index');
    Route::get('compliance-officer-insert',[ComplianceRoleManagController::class, 'createComplianceOfficer'])->name('compliance.officer.create');
    Route::post('compliance-officer-insert',[ComplianceRoleManagController::class,'storeComplianceOfficer'])->name('compliance.officer.store');
    Route::get('compliance-officer-update',[ComplianceRoleManagController::class,'editComplianceOfficer'])->name('compliance.officer.edit');
    Route::put('compliance-officer-update',[ComplianceRoleManagController::class,'updateComplianceOfficer'])->name('compliance.officer.update');


/*
|--------------------------------------------------------------------------
| Marketing assign start
|--------------------------------------------------------------------------
*/
    Route::get('marketing-manager-index',[MarketingRoleManagController::class, 'indexMarketingManager'])->name('marketing.manager.index');
    Route::get('marketing-manager-insert',[MarketingRoleManagController::class, 'createMarketingManager'])->name('marketing.manager.create');
    Route::post('marketing-manager-insert',[MarketingRoleManagController::class,'storeMarketingManager'])->name('marketing.manager.store');
    Route::get('marketing-manager-update',[MarketingRoleManagController::class,'editMarketingManager'])->name('marketing.manager.edit');
    Route::put('marketing-manager-update',[MarketingRoleManagController::class,'updateMarketingManager'])->name('marketing.manager.update');

    Route::get('marketing-team-lead-index',[MarketingRoleManagController::class, 'indexMarketingTeamLead'])->name('marketing.team.lead.index');
    Route::get('marketing-team-lead-insert',[MarketingRoleManagController::class, 'createMarketingTeamLead'])->name('marketing.team.lead.create');
    Route::post('marketing-team-lead-insert',[MarketingRoleManagController::class,'storeMarketingTeamLead'])->name('marketing.team.lead.store');
    Route::get('marketing-team-lead-update',[MarketingRoleManagController::class,'editMarketingTeamLead'])->name('marketing.team.lead.edit');
    Route::put('marketing-team-lead-update',[MarketingRoleManagController::class,'updateMarketingTeamLead'])->name('marketing.team.lead.update');

    Route::get('marketing-officer-index',[MarketingRoleManagController::class, 'indexMarketingOfficer'])->name('marketing.officer.index');
    Route::get('marketing-officer-insert',[MarketingRoleManagController::class, 'createMarketingOfficer'])->name('marketing.officer.create');
    Route::post('marketing-officer-insert',[MarketingRoleManagController::class,'storeMarketingOfficer'])->name('marketing.officer.store');
    Route::get('marketing-officer-update',[MarketingRoleManagController::class,'editMarketingOfficer'])->name('marketing.officer.edit');
    Route::put('marketing-officer-update',[MarketingRoleManagController::class,'updateMarketingOfficer'])->name('marketing.officer.update');

/*
|--------------------------------------------------------------------------
| Location start
|--------------------------------------------------------------------------
*/
    Route::get('country-index',[LocationController::class, 'indexCountry'])->name('country.index');
    Route::get('country-insert',[LocationController::class, 'createCountry'])->name('country.create');

    Route::get('state-index',[LocationController::class, 'indexState'])->name('state.index');
    Route::get('state-insert',[LocationController::class, 'createState'])->name('state.create');

    Route::get('city-index',[LocationController::class, 'indexCity'])->name('city.index');
    Route::get('city-insert',[LocationController::class, 'createCity'])->name('city.create');

/*
|--------------------------------------------------------------------------
| Branch start
|--------------------------------------------------------------------------
*/
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


/*
|--------------------------------------------------------------------------
| Degree start
|--------------------------------------------------------------------------
*/
    Route::get('degree-index',[DegreeController::class, 'indexDegree'])->name('degree.index');
    Route::get('degree-insert',[DegreeController::class,'createDegree'])->name('degree.create');
    Route::post('degree-insert',[DegreeController::class,'storeDegree'])->name('degree.store');
    Route::get('degree-update',[DegreeController::class,'editDegree'])->name('degree.edit');
    Route::put('degree-update',[DegreeController::class,'updateDegree'])->name('degree.update');


/*
|--------------------------------------------------------------------------
| Language start
|--------------------------------------------------------------------------
*/
    Route::get('language-index',[LanguageController::class, 'indexLanguage'])->name('language.index');
    Route::get('language-insert',[LanguageController::class,'createLanguage'])->name('language.create');
    Route::post('language-insert',[LanguageController::class,'storeLanguage'])->name('language.store');
    Route::get('language-update',[LanguageController::class,'editLanguage'])->name('language.edit');
    Route::put('language-update',[LanguageController::class,'updateLanguage'])->name('language.update');

/*
|--------------------------------------------------------------------------
| University start
|--------------------------------------------------------------------------
*/
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

/*
|--------------------------------------------------------------------------
| Lead start
|--------------------------------------------------------------------------
*/
    Route::get('lead-index',[LeadController::class, 'indexlead'])->name('lead.index');
    // Route::get('lead-insert',[LeadController::class,'createlead'])->name('lead.create');
    // Route::post('lead-insert',[LeadController::class,'storelead'])->name('lead.store');
    Route::get('lead-update/',[LeadController::class,'editlead'])->name('lead.edit');
    Route::put('lead-update/{id}',[LeadController::class,'updatelead'])->name('lead.update');
    Route::get('lead-view/',[LeadController::class,'viewlead'])->name('lead.view');

/*
|--------------------------------------------------------------------------
| Lead Upload start
|--------------------------------------------------------------------------
*/   
    Route::get('upload.lead-assign-index',[UploadController::class, 'indexAssignLeadUpload'])->name('upload.lead.assign.index');
    Route::post('upload.lead-assign-index',[UploadController::class, 'createAssignLeadUpload'])->name('upload.lead.assign.store');
    Route::get('upload.bulk-lead-insert',[UploadController::class,'creatBulkLeadUpload'])->name('upload.lead.bulk.create');
    Route::post('upload.bulk-lead-insert',[UploadController::class,'storeBulkLeadUpload'])->name('upload.lead.bulk..store');
    Route::get('upload.single-lead-insert',[UploadController::class,'createSingleLeadUpload'])->name('upload.lead.single.create');
    Route::post('upload.single-lead-insert',[UploadController::class,'storeSingleLeadUpload'])->name('upload.lead.single.store');


});