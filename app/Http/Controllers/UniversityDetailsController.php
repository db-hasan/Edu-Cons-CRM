<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Country;
use App\Models\University;
use Exception;
use Session;

class UniversityDetailsController extends Controller
{

    public function createUniversityiDetails() {
        $countries = Country::all();
        return view('backend.admin.universitydetails.create_university_details', compact('countries'));
    }

    public function createCourseiDetails() {
        $countries = Country::all();
        return view('backend.admin.universitydetails.create_course_details', compact('countries'));
    }
}
