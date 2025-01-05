<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Country;
use App\Models\University;
use Exception;
use Session;

use Illuminate\Http\Request;

class UniversityController extends Controller
{
    public function indexUniversity() {
        return view('backend.admin.university.index');
    }
    
    public function createUniversity() {
        $countries = Country::all();
        return view('backend.admin.university.create', compact('countries'));
    }

    public function editUniversity() {
        $countries = Country::all();
        return view('backend.admin.university.edit', compact('countries'));
    }

    public function viewUniversityCourse() {
        $countries = Country::all();
        return view('backend.admin.university.viewcourse', compact('countries'));
    }
    public function editUniversityCourse() {
        $countries = Country::all();
        return view('backend.admin.university.editcourse', compact('countries'));
    }

}
