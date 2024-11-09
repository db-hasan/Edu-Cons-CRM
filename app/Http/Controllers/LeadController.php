<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function indexlead() {
        return view('backend.admin.lead.index');
    }
}
