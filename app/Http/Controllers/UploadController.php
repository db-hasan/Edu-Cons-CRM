<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function indexAssignLeadUpload() {
        return view('backend.admin.upload.index');
    }
    public function creatBulkLeadUpload() {
        return view('backend.admin.upload.bulk');
    }
    public function createSingleLeadUpload() {
        return view('backend.admin.upload.single');
    }
}

