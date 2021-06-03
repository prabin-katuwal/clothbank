<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donar;

class FrontendController extends Controller
{

     public function index()
    {
       return view('frontend.index');
    }
    public function donatenow()
    {
       return view('dashboard');
    }

    public function donatenowstore(Request $request)
    {
       $this->validate($request,[
           "fullname"=>"required",
           "email"=>"required",
           "location"=>"required",
           "quantity"=>"required",
           "bank"=>"required"
       ]);
       $donatenow=Donar::create([
           "fullname"=>$request->fullname,
           "email"=>$request->email,
           "location"=>$request->location,
           "quantity"=>$request->quantity,
           "userid"=>$request->userid,
           "bank"=>$request->bank
       ]);
       return redirect()->back();
    }
}
