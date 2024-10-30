<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckerDashboardController extends Controller
{
    public function checkerdashboard() {
        return view('backend.checker.dashboard');
    }
}
