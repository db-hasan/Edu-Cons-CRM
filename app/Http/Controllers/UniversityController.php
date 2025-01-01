<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Country;
use App\Models\University;
use Exception;
use Session;

use Illuminate\Http\Request;

class UniversityController extends Controller
{
    public function indexUniversity() {
        return view('backend.admin.university.index');
    }
    
    public function createUniversity() {
        $countries = Country::all();
        return view('backend.admin.university.create', compact('countries'));
    }

    public function storeuniversity(Request $request): RedirectResponse
    {
        $request->validate([
            'state_id' => 'required|exists:states,id',
            'name' => 'required|array',
            'name.*' => 'required|string|max:255',
        ]);
    
        try {
            foreach ($request->name as $universityName) {
                University::create([
                    'state_id' => $request->state_id,
                    'name' => $universityName,
                ]);
            }
            return redirect()->route('university.index')->with('success', 'Universities created successfully.');
        } catch (\Exception $e) {
            return redirect()->route('university.index')->with('error', 'An error occurred. Please try again.');
        }
    }
    


    public function edituniversity($id){
        $data['states'] = State::where('status', 1)
                            ->orderBy('id', 'desc')
                            ->get();
        $data['university'] = University::find($id);
        if (!$data['university']) {
            return redirect()->back();
        }     
        return view('backend.admin.university.edit', $data);
    }

    public function updateuniversity(Request $request, $id): RedirectResponse
    {

        $request->validate([
            'state_id' => 'required|exists:states,id',
            'name' => 'required|string|max:255',
            'status' => 'required',
        ]);
        
        try {
            $data = University::findOrFail($id);
            $data->state_id   = $request->input('state_id');
            $data->name   = $request->input('name');
            $data->status  = $request->input('status');
            $data->save();

                return redirect()->route('university.index')->with('success', 'Data update successfully.');
            } catch (\Exception $e) {
                return redirect()->route('university.index')->with('error', $e->getMessage());
        }
    }
}
