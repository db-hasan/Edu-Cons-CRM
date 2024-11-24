<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Country;
use App\Models\State;
use Exception;
use Session;

use Illuminate\Http\Request;

class StateController extends Controller
{
    public function indexstate() {
        $states = State::orderBy('id', 'desc')->get();
        return view('backend.admin.state.index',compact('states'));
    }
    
    public function createstate() {
        $countries = Country::where('status', 1)
        ->orderBy('id', 'desc')
        ->get();
        return view('backend.admin.state.create', compact('countries'));
    }
    public function storestate(Request $request):RedirectResponse
    {
        $request->validate([
            'country_id' => 'required',
            'name' => 'required',
        ]);

        try {
            $data = new State();
            $data->country_id = $request->country_id;
            $data->name = $request->name;
            $data->save();
            return redirect()->route('state.index')->with('success', 'state created successfully.');
        } catch (\Exception $e) {
            return redirect()->route('state.index')->with('error', 'An error occurred. Please try again.');
        }
    }

    public function editstate($id){
        $data['countries'] = Country::where('status', 1)
        ->orderBy('id', 'desc')
        ->get();
        $data['state'] = State::find($id);
        if (!$states['state']) {
            return redirect()->back();
        }     
        return view('backend.admin.state.edit', $data);
    }

    public function updatestate(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'country_id' => 'required',
            'name' => 'required',
            'status' => 'required',
        ]);
        
        try {
            $data = State::findOrFail($id);
            $data->country_id   = $request->input('country_id');
            $data->name   = $request->input('name');
            $data->status  = $request->input('status');
            $data->save();

                return redirect()->route('state.index')->with('success', 'Data update successfully.');
            } catch (\Exception $e) {
                return redirect()->route('state.index')->with('error', $e->getMessage());
        }
    }
}
