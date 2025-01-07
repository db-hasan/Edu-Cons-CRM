<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Degree;
use Exception;
use Session;

class DegreeController extends Controller
{
    public function indexDegree() {
        return view('backend.admin.degree.index');
    }
    
    public function createDegree() {
        return view('backend.admin.degree.create');
    }

    public function editDegree() {
        return view('backend.admin.degree.edit');
    }
}
