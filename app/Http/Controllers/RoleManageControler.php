<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Country;
use Exception;
use Session;

class RoleManageControler extends Controller
{

/*
|--------------------------------------------------------------------------
| Country Manager assign start
|--------------------------------------------------------------------------
*/
    public function indexCountryManager() {
        return view('backend.admin.countryassign.index');
    }
    
    public function createCountryManager() {
        $countries = Country::all();
        return view('backend.admin.countryassign.create', compact('countries'));
    }

    public function editCountryManager() {
        $countries = Country::all();
        return view('backend.admin.countryassign.edit', compact('countries'));
    }


/*
|--------------------------------------------------------------------------
| Region Manager assign start
|--------------------------------------------------------------------------
*/
    public function indexRegionManager() {
        return view('backend.admin.regionassign.index');
    }
    
    public function createRegionManager() {
        $countries = Country::all();
        return view('backend.admin.regionassign.create', compact('countries'));
    }

    public function editRegionManager() {
        $countries = Country::all();
        return view('backend.admin.regionassign.edit', compact('countries'));
    }



/*
|--------------------------------------------------------------------------
| Agent Manager assign start
|--------------------------------------------------------------------------
*/
    public function indexAgentAssign() {
        return view('backend.admin.agentassign.index');
    }
    
    public function createAgentAssign() {
        $countries = Country::all();
        return view('backend.admin.agentassign.create', compact('countries'));
    }

    public function editAgentAssign() {
        $countries = Country::all();
        return view('backend.admin.agentassign.edit', compact('countries'));
    }


/*
|--------------------------------------------------------------------------
| Branch Manager assign start
|--------------------------------------------------------------------------
*/
    public function indexBranchManager() {
        return view('backend.admin.branchassign.index');
    }
    
    public function createBranchManager() {
        $countries = Country::all();
        return view('backend.admin.branchassign.create', compact('countries'));
    }

    public function editBranchManager() {
        $countries = Country::all();
        return view('backend.admin.branchassign.edit', compact('countries'));
    }


/*
|--------------------------------------------------------------------------
| Consultant Manager assign start
|--------------------------------------------------------------------------
*/
    public function indexConsultantAssign() {
        return view('backend.admin.consultandassign.index');
    }
    
    public function createConsultantAssign() {
        $countries = Country::all();
        return view('backend.admin.consultandassign.create', compact('countries'));
    }

    public function editConsultantAssign() {
        $countries = Country::all();
        return view('backend.admin.consultandassign.edit', compact('countries'));
    }
}