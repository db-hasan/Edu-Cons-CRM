<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Country;
use Exception;
use Session;

class CountryController extends Controller
{
    public function indexcountry() {
        $countries = Country::orderBy('id', 'desc')->get();
        return view('backend.admin.country.index',compact('countries'));
    }
    
    public function createcountry() {
        return view('backend.admin.country.create');
    }
    public function storecountry(Request $request):RedirectResponse
    {
        $request->validate([
            'name' => 'required',
        ]);

        try {
            $data = new Country();
            $data->name = $request->name;
            $data->save();
            return redirect()->route('country.index')->with('success', 'countrie created successfully.');
        } catch (\Exception $e) {
            return redirect()->route('country.index')->with('error', 'An error occurred. Please try again.');
        }
    }

    public function editcountry($id){
        $data['country'] = Country::find($id);
        if (!$data['country']) {
            return redirect()->back();
        }     
        return view('backend.admin.country.edit', $data);
    }

    public function updatecountry(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'status' => 'required',
        ]);
        
        try {
            $data = Country::findOrFail($id);
            $data->name   = $request->input('name');
            $data->status  = $request->input('status');
            $data->save();

                return redirect()->route('country.index')->with('success', 'Data update successfully.');
            } catch (\Exception $e) {
                return redirect()->route('country.index')->with('error', $e->getMessage());
        }
    }
}
