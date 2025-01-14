<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Country;
use Exception;
use Session;

class AdmissionRoleManagController extends Controller
{

/*
|--------------------------------------------------------------------------
| Admission Manager index
|--------------------------------------------------------------------------
*/
    public function indexAdmissionManager() {
        return view('backend.admin.admission.manager.index');
    }


/*
|--------------------------------------------------------------------------
| Admission teamlead assign start
|--------------------------------------------------------------------------
*/
    public function indexAdmissionTeamLead() {
        return view('backend.admin.admission.teamlead.index');
    }
    
    public function createAdmissionTeamLead() {
        $countries = Country::all();
        return view('backend.admin.admission.teamlead.create', compact('countries'));
    }

    public function editAdmissionTeamLead() {
        $countries = Country::all();
        return view('backend.admin.admission.teamlead.edit', compact('countries'));
    }


/*
|--------------------------------------------------------------------------
| Admission officer assign start
|--------------------------------------------------------------------------
*/
    public function indexAdmissionOfficer() {
        return view('backend.admin.admission.officer.index');
    }
    
    public function createAdmissionOfficer() {
        $countries = Country::all();
        return view('backend.admin.admission.officer.create', compact('countries'));
    }

    public function editAdmissionOfficer() {
        $countries = Country::all();
        return view('backend.admin.admission.officer.edit', compact('countries'));
    }
}


