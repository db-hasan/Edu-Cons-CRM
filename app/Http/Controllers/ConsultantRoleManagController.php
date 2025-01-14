<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Country;
use Exception;
use Session;

class ConsultantRoleManagController extends Controller
{
/*
|--------------------------------------------------------------------------
| Country Manager assign start
|--------------------------------------------------------------------------
*/
    public function indexCountryManager() {
        return view('backend.admin.consultant.countryassign.index');
    }
    
    public function createCountryManager() {
        $countries = Country::all();
        return view('backend.admin.consultant.countryassign.create', compact('countries'));
    }

    public function editCountryManager() {
        $countries = Country::all();
        return view('backend.admin.consultant.countryassign.edit', compact('countries'));
    }


/*
|--------------------------------------------------------------------------
| Region Manager assign start
|--------------------------------------------------------------------------
*/
    public function indexRegionManager() {
        return view('backend.admin.consultant.regionassign.index');
    }
    
    public function createRegionManager() {
        $countries = Country::all();
        return view('backend.admin.consultant.regionassign.create', compact('countries'));
    }

    public function editRegionManager() {
        $countries = Country::all();
        return view('backend.admin.consultant.regionassign.edit', compact('countries'));
    }



/*
|--------------------------------------------------------------------------
| Agent Manager assign start
|--------------------------------------------------------------------------
*/
    public function indexAgentManager() {
        return view('backend.admin.consultant.agentmanager.index');
    }
    
    public function createAgentManager() {
        $countries = Country::all();
        return view('backend.admin.consultant.agentmanager.create', compact('countries'));
    }

    public function editAgentManager() {
        $countries = Country::all();
        return view('backend.admin.consultant.agentmanager.edit', compact('countries'));
    }



/*
|--------------------------------------------------------------------------
| Agent assign start
|--------------------------------------------------------------------------
*/
    public function indexAgentAssign() {
        return view('backend.admin.consultant.agentassign.index');
    }
    
    public function createAgentAssign() {
        $countries = Country::all();
        return view('backend.admin.consultant.agentassign.create', compact('countries'));
    }

    public function editAgentAssign() {
        $countries = Country::all();
        return view('backend.admin.consultant.agentassign.edit', compact('countries'));
    }


/*
|--------------------------------------------------------------------------
| Branch Manager assign start
|--------------------------------------------------------------------------
*/
    public function indexBranchManager() {
        return view('backend.admin.consultant.branchassign.index');
    }
    
    public function createBranchManager() {
        $countries = Country::all();
        return view('backend.admin.consultant.branchassign.create', compact('countries'));
    }

    public function editBranchManager() {
        $countries = Country::all();
        return view('backend.admin.consultant.branchassign.edit', compact('countries'));
    }


/*
|--------------------------------------------------------------------------
| Consultant Manager assign start
|--------------------------------------------------------------------------
*/
    public function indexConsultantAssign() {
        return view('backend.admin.consultant.consultantassign.index');
    }
    
    public function createConsultantAssign() {
        $countries = Country::all();
        return view('backend.admin.consultant.consultantassign.create', compact('countries'));
    }

    public function editConsultantAssign() {
        $countries = Country::all();
        return view('backend.admin.consultant.consultantassign.edit', compact('countries'));
    }
}
