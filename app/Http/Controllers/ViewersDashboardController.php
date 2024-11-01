<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewersDashboardController extends Controller
{
    public function admindashboard() {
        return view('backend.admin.dashboard');
    }
}
