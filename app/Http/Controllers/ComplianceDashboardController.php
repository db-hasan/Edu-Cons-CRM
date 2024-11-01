<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComplianceDashboardController extends Controller
{
    public function admindashboard() {
        return view('backend.admin.dashboard');
    }
}
