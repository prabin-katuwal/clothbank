<?php

namespace App\Http\Controllers\bank;

use App\Backend\Bank;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class BankController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware("superadmin");
    // }

    public function register()
    {
         return view('Admin.Bank.auth.register');
    }

    public function registerstore(Request $request)
    {

      $this->validate($request,[
          "fullname"=>"required",
          "location"=>"required",
          "member"=>"required",
          "phone"=>"required",
          "email"=>"required",
          "image"=>"required",
          "password"=>"required"
      ]);

      $image=$request->image;
      $image_new_name=time().$image->getClientOriginalName();
      $image->move('uploads/bank/',$image_new_name);

      Bank::create([
          "fullname"=>$request->fullname,
          "location"=>$request->location,
          "member"=>$request->member,
          "phone"=>$request->phone,
          "email"=>$request->email,
          "image"=>"uploads.bank/".$image_new_name,
          "password"=>bcrypt($request->password)
      ]);
      return redirect()->back();
    }

    public function login()
    {
        return view('Admin.Bank.auth.login');
    }

    public function logincheck(Request $request)
    {
       $this->validate($request, [
        'email' => 'required',
        'password' => 'required|min:6'
    ]);

    if (Auth::guard('bank')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {

        $status=Auth::guard('bank')->user()->status;
       if($status==0)
       {
           return redirect()->back()->with('message','You are Not active');
       }
       else{
            return redirect()->intended('admin/dashboard');

       }
    }

    return back()->withInput($request->only('email'));
    }
}
