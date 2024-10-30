<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisitorDashboardController extends Controller
{
    public function visitodrashboard() {
        return view('backend.visitor.dashboard');
    }
}
