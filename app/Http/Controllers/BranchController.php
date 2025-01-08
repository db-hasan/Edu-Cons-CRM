<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Country;
use Exception;
use Session;

class BranchController extends Controller
{
    public function indexRegion() {
        return view('backend.admin.region.index');
    }
    
    public function createRegion() {
        $countries = Country::all();
        return view('backend.admin.region.create', compact('countries'));
    }

    public function editRegion() {
        $countries = Country::all();
        return view('backend.admin.region.edit', compact('countries'));
    }

    public function indexBranch() {
        return view('backend.admin.branch.index');
    }
    
    public function createBranch() {
        $countries = Country::all();
        return view('backend.admin.branch.create', compact('countries'));
    }

    public function editBranch() {
        $countries = Country::all();
        return view('backend.admin.branch.edit', compact('countries'));
    }
}


