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

            if ($user->roles === 'admin') {
                return redirect()->route('admin.dashboard'); 
            }
            elseif ($user->roles === 'viewers') {
                return redirect()->route('viewers.dashboard');
            }
            elseif ($user->roles === 'marketing') {
                return redirect()->route('marketing.dashboard');
            }
            elseif ($user->roles === 'manager') {
                return redirect()->route('manager.dashboard');
            }
            elseif ($user->roles === 'consultant') {
                return redirect()->route('consultant.dashboard');
            }
            elseif ($user->roles === 'compliance') {
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

    public function indexuser() {
        $users = User::all();
        // $users = User::where('id', '!=', 1)->get(); // Fetch all users except the one with ID 1
        return view('auth.index', compact('users'));
    }

    public function createuser() {
        // $roles = Role::pluck('name','name')->all();
        // $roles = Role::where('id', '!=', 1)->pluck('name', 'name')->all();
        return view('auth.create');
    }
    public function storeuser(Request $request):RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'roles' => 'required',
            'number' => 'required|digits_between:11,14',
            'new_password' => 'required|confirmed|min:6',
        //     'new_password' => [
        //         'required',
        //         'confirmed',
        //         'string',
        //         'min:8',             
        //         'regex:/[a-z]/',     
        //         'regex:/[A-Z]/',     
        //         'regex:/[0-9]/',     
        //         'regex:/[@$!%*?&#]/' 
        //     ],
        // ], [
        //     'new_password.min' => 'The password must be at least 8 characters long.',
        //     'new_password.regex' => 'Password must be uppercaser, lowercase, number, and special character.',
        ]);
        
        
        // try {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->number = $request->number;
            $user->roles = $request->roles;
            $user->password = Hash::make($request->new_password);
            $user->save();

            // $user->syncRoles($request->input('roles'));

            return redirect()->route('user.index')->with('success', 'user created successfully.');
        // } catch (\Exception $e) {
        //     return redirect()->route('user.index')->with('error', 'An error occurred. Please try again.');
        // }
    }

    public function edituser($id){
        $user = User::find($id);
        // $roles = Role::pluck('name','name')->all();
        // $roles = Role::where('id', '!=', 1)->pluck('name', 'name')->all();
        // $userRole = $user->roles->pluck('name','name')->all();
    
        return view('auth.edit',compact('user'));
    }

    public function updateuser(Request $request, $id): RedirectResponse
    {
        $user = User::findOrFail($id);

        // if ($user->roles->contains('id', 1)) {
        //     return redirect()->route('user.index')->with('error', 'You cannot change the role or status of superadmin.');
        // }
    
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'number' => 'required|digits_between:11,14',
            'roles' => 'required',
            'status' => 'required|in:1,2',

            'new_password' => 'nullable|confirmed|min:8',

            //     'new_password' => [
            //         'required',
            //         'confirmed',
            //         'string',
            //         'min:8',             
            //         'regex:/[a-z]/',    
            //         'regex:/[A-Z]/',     
            //         'regex:/[0-9]/',     
            //         'regex:/[@$!%*?&#]/' 
            //     ],
            // ], [
            //     'new_password.min' => 'The password must be at least 8 characters long.',
            //     'new_password.regex' => 'Password must be uppercaser, lowercase, number, and special character.',
            ]);
        
            try{
                $user->name = $request->input('name');
                $user->email = $request->input('email');    
                $user->number = $request->input('number');    
                $user->roles = $request->input('roles');    
                $user->status = $request->input('status');  

                // Only hash and set the new password if it is provided
                if ($request->filled('new_password')) {
                    $user->password = Hash::make($request->input('new_password'));
                }

                $user->save();

                // DB::table('model_has_roles')->where('model_id',$id)->delete();
    
                // $user->syncRoles($request->input('roles'));

                return redirect()->route('user.index')->with('success', 'Data update successfully.');
            } catch (\Exception $e) {
                return redirect()->route('user.index')->with('error', 'An error occurred. Please try again.');
         }
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

