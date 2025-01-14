<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Country;
use App\Models\Degree;
use App\Models\Language;
use App\Models\Intake;
use App\Models\CallStatus;
use App\Models\Financial;
use App\Models\Situation;
use Exception;
use Session;

class LeadController extends Controller
{
    public function indexlead() {
        $countries = Country::all();
        $degrees = Degree::all();
        $languages = Language::all();
        $intakes = Intake::all();
        $callstatuses = CallStatus::all();               
        $financials = Financial::all();               
        $situations = Situation::all();               
        return view('backend.admin.lead.index', compact('countries', 'degrees', 
        'intakes', 'languages', 'callstatuses', 'financials', 'situations' ));
    }

    public function editlead() {
        return view('backend.admin.lead.edit');
    }

    public function viewlead() {
        return view('backend.admin.lead.view');
    }
}
