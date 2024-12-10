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
use App\Models\Subject;
use App\Models\SubjectMapping;
use Exception;
use Session;

class SubjectMappingController extends Controller
{
    
    
    public function indexsubjectmapping() {
        $degreemappinges = DegreeMapping::with('campus')
                    ->orderBy('campus_id', 'desc')
                    ->get()
                    ->groupBy('campus_id');
        return view('backend.admin.subjectmapping.index',compact('degreemappinges'));
    }

    public function viewsubjectmapping($id){
        $degreemapping = DegreeMapping::with('subjectmapping.subject')->find($id);
        if (!$degreemapping) {
            return redirect()->back();
        }    
        return view('backend.admin.subjectmapping.view', compact('degreemapping'));
    }
    
    public function createsubjectmapping() {
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
        $degreemappinges = DegreeMapping::where('status', 1)
                    ->orderBy('id', 'desc')
                    ->get();
        $subjects = Subject::where('status', 1)
                    ->orderBy('id', 'desc')
                    ->get();
        
        return view('backend.admin.subjectmapping.create', compact('countries', 'states', 'universities', 'campuses', 'degreemappinges', 'subjects'));
    }

    public function storesubjectmapping(Request $request): RedirectResponse
    {
        
        $request->validate([
            'campus_id' => 'required|exists:campuses,id',
            'degree_mapping_id' => 'required|exists:degree_mappings,id',
            
            'subject_id' => 'required|array',
            'subject_id.*' => 'required|exists:subjects,id',
            'course_duration' => 'required|array',
            'course_duration.*' => 'required|string|max:255',
            'admission_fee' => 'required|array',
            'admission_fee.*' => 'required|string|max:255',
            'entry_requirement' => 'required|array',
            'entry_requirement.*' => 'required|string|max:1200',
        ]);
    
        try {
            foreach ($request->subject_id as $index => $subjectId) {
                SubjectMapping::create([
                    'campus_id' => $request->campus_id,
                    'degree_mapping_id' => $request->degree_mapping_id,
                    
                    'subject_id' => $subjectId,
                    'course_duration' => $request->course_duration[$index] ?? null,
                    'admission_fee' => $request->admission_fee[$index] ?? null,
                    'entry_requirement' => $request->entry_requirement[$index] ?? null,
                ]);
            }
            
            return redirect()->route('subjectmapping.index')->with('success', 'subjectmappinges created successfully.');
        } catch (\Exception $e) {
            return redirect()->route('subjectmapping.index')->with('error', 'An error occurred. Please try again.');
        }
    }
    

    public function editsubjectmapping($id){
        $data['campuses'] = Campus::where('status', 1)
                            ->orderBy('id', 'desc')
                            ->get();
        $data['degrees'] = Degree::where('status', 1)
                            ->orderBy('id', 'desc')
                            ->get();
        $data['subjectmapping'] = Subjectmapping::find($id);
            if (!$data['subjectmapping']) {
                return redirect()->back();
            }     
        return view('backend.admin.subjectmapping.edit', $data);
    }

    public function updatesubjectmapping(Request $request, $id): RedirectResponse
    {

        $request->validate([
            'campus_id' => 'required|exists:campuses,id',
            'degree_id' => 'required|exists:degrees,id',
            'status' => 'required',
        ]);
        
        try {
            $data = Subjectmapping::findOrFail($id);
            $data->campus_id   = $request->input('campus_id');
            $data->degree_id   = $request->input('degree_id');
            $data->status  = $request->input('status');
            $data->save();

                return redirect()->route('subjectmapping.index')->with('success', 'Data update successfully.');
            } catch (\Exception $e) {
                return redirect()->route('subjectmapping.index')->with('error', $e->getMessage());
        }
    }
}
