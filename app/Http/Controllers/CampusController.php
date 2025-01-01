<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Country;
use App\Models\University;
use App\Models\Campus;
use Exception;
use Session;

use Illuminate\Http\Request;

class CampusController extends Controller
{
    public function indexCampus() {
        return view('backend.admin.campus.index');
    }
    
    public function createCampus() {
        $countries = Country::all();
        return view('backend.admin.campus.create', compact('countries'));
    }

    public function storecampus(Request $request): RedirectResponse
    {
        $request->validate([
            'university_id' => 'required|exists:universities,id',
            'name' => 'required|array',
            'name.*' => 'required|string|max:255',
        ]);
    
        try {
            foreach ($request->name as $campusName) {
                Campus::create([
                    'university_id' => $request->university_id,
                    'name' => $campusName,
                ]);
            }
            return redirect()->route('campus.index')->with('success', 'campuses created successfully.');
        } catch (\Exception $e) {
            return redirect()->route('campus.index')->with('error', 'An error occurred. Please try again.');
        }
    }
    


    public function editcampus($id){
        $data['universities'] = University::where('status', 1)
                            ->orderBy('id', 'desc')
                            ->get();
        $data['campus'] = Campus::find($id);
        if (!$data['campus']) {
            return redirect()->back();
        }     
        return view('backend.admin.campus.edit', $data);
    }

    public function updatecampus(Request $request, $id): RedirectResponse
    {

        $request->validate([
            'university_id' => 'required|exists:states,id',
            'name' => 'required|string|max:255',
            'status' => 'required',
        ]);
        
        try {
            $data = Campus::findOrFail($id);
            $data->university_id   = $request->input('university_id');
            $data->name   = $request->input('name');
            $data->status  = $request->input('status');
            $data->save();

                return redirect()->route('campus.index')->with('success', 'Data update successfully.');
            } catch (\Exception $e) {
                return redirect()->route('campus.index')->with('error', $e->getMessage());
        }
    }
}
