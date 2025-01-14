<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Country;
use Exception;
use Session;

class MarketingRoleManagController extends Controller
{

/*
|--------------------------------------------------------------------------
| Marketing Manager index
|--------------------------------------------------------------------------
*/
    public function indexMarketingManager() {
        return view('backend.admin.marketing.manager.index');
    }


/*
|--------------------------------------------------------------------------
| Marketing teamlead assign start
|--------------------------------------------------------------------------
*/
    public function indexMarketingTeamLead() {
        return view('backend.admin.marketing.teamlead.index');
    }
    
    public function createMarketingTeamLead() {
        $countries = Country::all();
        return view('backend.admin.marketing.teamlead.create', compact('countries'));
    }

    public function editMarketingTeamLead() {
        $countries = Country::all();
        return view('backend.admin.marketing.teamlead.edit', compact('countries'));
    }


/*
|--------------------------------------------------------------------------
| Marketing officer assign start
|--------------------------------------------------------------------------
*/
    public function indexMarketingOfficer() {
        return view('backend.admin.marketing.officer.index');
    }
    
    public function createMarketingOfficer() {
        $countries = Country::all();
        return view('backend.admin.marketing.officer.create', compact('countries'));
    }

    public function editMarketingOfficer() {
        $countries = Country::all();
        return view('backend.admin.marketing.officer.edit', compact('countries'));
    }
}
