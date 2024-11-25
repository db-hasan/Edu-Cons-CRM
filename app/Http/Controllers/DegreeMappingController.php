<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Country;
use App\Models\State;
use App\Models\University;
use App\Models\Campus;
use App\Models\Degree;
use App\Models\DegreeMapping;
use Exception;
use Session;

class DegreeMappingController extends Controller
{
    public function indexdegreemapping() {
        $degreemappinges = DegreeMapping::with('campus')
                    ->orderBy('campus_id', 'desc')
                    ->get()
                    ->groupBy('campus_id');
        return view('backend.admin.degreemapping.index',compact('degreemappinges'));
    }
    
    public function createdegreemapping() {
        $countries = Country::where('status', 1)
                    ->orderBy('id', 'desc')
                    ->get();
        $states = State::where('status', 1)
                    ->orderBy('id', 'desc')
                    ->get();
        $universities = University::where('status', 1)
                    ->orderBy('id', 'desc')
                    ->get();
        $campuses = Campus::where('status', 1)
                    ->orderBy('id', 'desc')
                    ->get();
        $degrees = Degree::where('status', 1)
                    ->orderBy('id', 'desc')
                    ->get();
        return view('backend.admin.degreemapping.create', compact('countries', 'states', 'universities', 'campuses', 'degrees'));
    }

    public function storeDegreeMapping(Request $request): RedirectResponse
    {
        
        $request->validate([
            'campus_id' => 'required|exists:campuses,id',
            'degree_id' => 'required|array',
            'degree_id.*' => 'required|exists:degrees,id',
        ]);
    
        try {
            foreach ($request->degree_id as $degreeId) {
                DegreeMapping::create([
                    'campus_id' => $request->campus_id, 
                    'degree_id' => $degreeId,
                ]);
            }
            
            return redirect()->route('degreemapping.index')->with('success', 'degreemappinges created successfully.');
        } catch (\Exception $e) {
            return redirect()->route('degreemapping.index')->with('error', 'An error occurred. Please try again.');
        }
    }
    

    public function editdegreemapping($id){
        $data['campuses'] = Campus::where('status', 1)
                            ->orderBy('id', 'desc')
                            ->get();
        $data['degrees'] = Degree::where('status', 1)
                            ->orderBy('id', 'desc')
                            ->get();
        $data['degreemapping'] = DegreeMapping::find($id);
            if (!$data['degreemapping']) {
                return redirect()->back();
            }     
        return view('backend.admin.degreemapping.edit', $data);
    }

    public function updatedegreemapping(Request $request, $id): RedirectResponse
    {

        $request->validate([
            'campus_id' => 'required|exists:campuses,id',
            'degree_id' => 'required|exists:degrees,id',
            'status' => 'required',
        ]);
        
        try {
            $data = DegreeMapping::findOrFail($id);
            $data->campus_id   = $request->input('campus_id');
            $data->degree_id   = $request->input('degree_id');
            $data->status  = $request->input('status');
            $data->save();

                return redirect()->route('degreemapping.index')->with('success', 'Data update successfully.');
            } catch (\Exception $e) {
                return redirect()->route('degreemapping.index')->with('error', $e->getMessage());
        }
    }
}
