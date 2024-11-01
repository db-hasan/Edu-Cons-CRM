<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Exception;
use Session;

class AuthController extends Controller
{
    // Display the login form
    public function login() {
        return view('auth.login');
    }
    
    public function adminlogin(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();
        if ($user && Hash::check($request->password, $user->password)) {
            // Store user session data
            $request->session()->put('LoginId', $user->id);
            Auth::login($user);

            // if (in_array($user->role, ['superadmin', 'admin', 'visitor'])) {
            //     return redirect()->route('admin.dashboard'); 
            // }

            if ($user->role === 'admin') {
                return redirect()->route('admin.dashboard'); 
            }
            elseif ($user->role === 'viewers') {
                return redirect()->route('viewers.dashboard');
            }
            elseif ($user->role === 'marketing') {
                return redirect()->route('marketing.dashboard');
            }
            elseif ($user->role === 'manager') {
                return redirect()->route('manager.dashboard');
            }
            elseif ($user->role === 'consultant') {
                return redirect()->route('consultant.dashboard');
            }
            elseif ($user->role === 'compliance') {
                return redirect()->route('compliance.dashboard');
            } else {
                return redirect()->route('admin.login');
            }
        } else {
            return back()->with('fail', 'Invalid email or password!');
        }
    }
    
    // Display the logout
    public function logout() {
        \Session::flush();
        \Auth::logout();
        return redirect()->route('login');
    }

    // Display the Password Update
    public function profileupdate() {
        $users=Auth::user();
        return view('auth.password', compact('users'));
    }

    public function passwordupdate(Request $request) {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);

        // Match old password
        if (!Hash::check($request->old_password, auth::user()->password)) {
            return redirect()->route('profle.update')->with('error', 'Old password not match.');
        }

        // Update password
        User::whereId(Auth::user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return redirect()->route('profle.update')->with('success', 'Password updated successfully.');
    }

}

