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

    public function indexbranch() {
        $branchs = Branch::latest()->get();
        return view('backend.admin.branch.index',compact('branchs'));
    }
    
    public function createbranch() {
        return view('backend.admin.branch.create');
    }
    public function storebranch(Request $request):RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'number' => 'required',
        ]);

        try {
            $data = new Branch();
            $data->name = $request->name;
            $data->number = $request->number;
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
            'number' => 'required',
            'status' => 'required',
        ]);
        
        try {
            $data = Branch::findOrFail($id);
            $data->name   = $request->input('name');
            $data->number  = $request->input('number');
            $data->status  = $request->input('status');
            $data->save();

                return redirect()->route('branch.index')->with('success', 'Data update successfully.');
            } catch (\Exception $e) {
                return redirect()->route('branch.index')->with('error', $e->getMessage());
        }
    }
}


