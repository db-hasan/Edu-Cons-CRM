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
    public function indexdegree() {
        $degrees = Degree::orderBy('id', 'desc')->get();
        return view('backend.admin.degree.index',compact('degrees'));
    }
    
    public function createdegree() {
        return view('backend.admin.degree.create');
    }
    public function storedegree(Request $request):RedirectResponse
    {
        $request->validate([
            'name' => 'required',
        ]);

        try {
            $data = new Degree();
            $data->name = $request->name;
            $data->save();
            return redirect()->route('degree.index')->with('success', 'degree created successfully.');
        } catch (\Exception $e) {
            return redirect()->route('degree.index')->with('error', 'An error occurred. Please try again.');
        }
    }

    public function editdegree($id){
        $degrees['degree'] = Degree::find($id);
        if (!$degrees['degree']) {
            return redirect()->back();
        }     
        return view('backend.admin.degree.edit', $degrees);
    }

    public function updatedegree(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'status' => 'required',
        ]);
        
        try {
            $data = Degree::findOrFail($id);
            $data->name   = $request->input('name');
            $data->status  = $request->input('status');
            $data->save();

                return redirect()->route('degree.index')->with('success', 'Data update successfully.');
            } catch (\Exception $e) {
                return redirect()->route('degree.index')->with('error', $e->getMessage());
        }
    }
}
