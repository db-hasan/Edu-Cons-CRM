<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function indexlead() {
        return view('backend.admin.lead.index');
    }

    public function createlead() {
        return view('backend.admin.lead.create');
    }

    public function editlead() {
        return view('backend.admin.lead.edit');
    }

    public function viewlead() {
        return view('backend.admin.lead.view');
    }
}
