<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarketingDashboardController extends Controller
{
    public function admindashboard() {
        return view('backend.admin.dashboard');
    }
}
