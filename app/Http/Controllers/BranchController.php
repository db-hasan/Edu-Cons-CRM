<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Branch;
use Exception;
use Session;

class BranchController extends Controller
{
    function __construct()
    {
        $this->middleware(['permission:branch-permission'], ['only' => ['indexbranch', 'createbranch', 'storebranch', 'editbranch', 'updatebranch']]);
    }

    public function indexbranch() {
        $branches = Branch::orderBy('id', 'desc')->get();
        return view('backend.admin.branch.index',compact('branches'));
    }
    
    public function createbranch() {
        return view('backend.admin.branch.create');
    }
    public function storebranch(Request $request):RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:branches,email', 
            'number' => 'required|unique:branches,number|digits_between:11,14',
            'address' => 'required',
            'zip' => 'required',
        ]);

        try {
            $data = new Branch();
            $data->name = $request->name;
            $data->number = $request->number;
            $data->email = $request->email;
            $data->address = $request->address;
            $data->zip = $request->zip;
            $data->save();
            return redirect()->route('branch.index')->with('success', 'branch created successfully.');
        } catch (\Exception $e) {
            return redirect()->route('branch.index')->with('error', 'An error occurred. Please try again.');
        }
    }

    public function editbranch($id=null){
        $branchs['branch'] = Branch::find($id);
        if (!$branchs['branch']) {
            return redirect()->back();
        }     
        return view('backend.admin.branch.edit', $branchs);
    }

    public function updatebranch(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:branches,email,' . $id,  // Ignore current ID for unique check
            'number' => 'required|digits_between:11,14|unique:branches,number,' . $id,  // Ignore current ID for unique check
            'address' => 'required',
            'zip' => 'required',
            'status' => 'required',
        ]);
        
        try {
            $data = Branch::findOrFail($id);
            $data->name   = $request->input('name');
            $data->number  = $request->input('number');
            $data->email  = $request->input('email');
            $data->address  = $request->input('address');
            $data->zip  = $request->input('zip');
            $data->status  = $request->input('status');
            $data->save();

                return redirect()->route('branch.index')->with('success', 'Data update successfully.');
            } catch (\Exception $e) {
                return redirect()->route('branch.index')->with('error', $e->getMessage());
        }
    }
}


