<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Subject;
use Exception;
use Session;

class SubjectController extends Controller
{
    public function indexsubject() {
        $subjects = Subject::orderBy('id', 'desc')->get();
        return view('backend.admin.subject.index',compact('subjects'));
    }
    
    public function createsubject() {
        return view('backend.admin.subject.create');
    }
    public function storesubject(Request $request):RedirectResponse
    {
        $request->validate([
            'name' => 'required',
        ]);

        try {
            $data = new Subject();
            $data->name = $request->name;
            $data->save();
            return redirect()->route('subject.index')->with('success', 'subject created successfully.');
        } catch (\Exception $e) {
            return redirect()->route('subject.index')->with('error', 'An error occurred. Please try again.');
        }
    }

    public function editsubject($id){
        $subjects['subject'] = Subject::find($id);
        if (!$subjects['subject']) {
            return redirect()->back();
        }     
        return view('backend.admin.subject.edit', $subjects);
    }

    public function updatesubject(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'status' => 'required',
        ]);
        
        try {
            $data = Subject::findOrFail($id);
            $data->name   = $request->input('name');
            $data->status  = $request->input('status');
            $data->save();

                return redirect()->route('subject.index')->with('success', 'Data update successfully.');
            } catch (\Exception $e) {
                return redirect()->route('subject.index')->with('error', $e->getMessage());
        }
    }
}
