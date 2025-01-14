<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Country;
use Exception;
use Session;

class ComplianceRoleManagController extends Controller
{

/*
|--------------------------------------------------------------------------
| Compliance Manager index
|--------------------------------------------------------------------------
*/
    public function indexComplianceManager() {
        return view('backend.admin.compliance.manager.index');
    }


/*
|--------------------------------------------------------------------------
| Compliance teamlead assign start
|--------------------------------------------------------------------------
*/
    public function indexComplianceTeamLead() {
        return view('backend.admin.compliance.teamlead.index');
    }
    
    public function createComplianceTeamLead() {
        $countries = Country::all();
        return view('backend.admin.compliance.teamlead.create', compact('countries'));
    }

    public function editComplianceTeamLead() {
        $countries = Country::all();
        return view('backend.admin.compliance.teamlead.edit', compact('countries'));
    }


/*
|--------------------------------------------------------------------------
| Compliance officer assign start
|--------------------------------------------------------------------------
*/
    public function indexComplianceOfficer() {
        return view('backend.admin.compliance.officer.index');
    }
    
    public function createComplianceOfficer() {
        $countries = Country::all();
        return view('backend.admin.compliance.officer.create', compact('countries'));
    }

    public function editComplianceOfficer() {
        $countries = Country::all();
        return view('backend.admin.compliance.officer.edit', compact('countries'));
    }
}


