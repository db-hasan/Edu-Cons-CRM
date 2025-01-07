<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Language;
use Exception;
use Session;

class LanguageController extends Controller
{
    public function indexLanguage() {
        return view('backend.admin.language.index');
    }
    
    public function createLanguage() {
        return view('backend.admin.language.create');
    }

    public function editLanguage() {
        return view('backend.admin.language.edit');
    }
}
