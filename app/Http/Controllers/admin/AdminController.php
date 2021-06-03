<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Backend\Admin;
use Auth;

class AdminController extends Controller
{

    public function index()
    {
        $admin=Admin::all();
        return view('Admin.Admin.index',compact('admin'));
    }
    public function create()
    {
        return view('Admin.Admin.create');
    }

    public function store(Request $request)
    {
       $this->validate($request,[
           "fullname"=>"required",
           "email"=>"required",
           "password"=>"required"
       ]);
       $admin=Admin::create([
           "fullname"=>$request->fullname,
           "email"=>$request->email,
           "password"=>bcrypt($request->password)
       ]);

       return redirect()->back();
    }
public function login()

{
    return view('Admin.Admin.auth.login');
}
    public function loginstore(Request $request)
    {
     $this->validate($request, [
        'email' => 'required',
        'password' => 'required|min:6'
    ]);

    if (Auth::guard('admin')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {

            return redirect()->intended('admin/dashboard');
    }

    return back()->withInput($request->only('email'));
    }
}
