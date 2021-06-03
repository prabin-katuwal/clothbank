<?php

namespace App\Http\Controllers\superadmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class SuperAdminController extends Controller
{
     public function login()
    {
        return view('Admin.SuperAdmin.auth.login');
    }

    public function logincheck(Request $request)
    {

       $this->validate($request, [
        'email' => 'required',
        'password' => 'required|min:6'
    ]);

    if (Auth::guard('superadmin')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {

            return redirect()->intended('admin/dashboard');
    }

    return back()->withInput($request->only('email'));
    }
}
