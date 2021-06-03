<?php

namespace App\Http\Controllers;

use App\Notifications\sendnotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\User;
use Illuminate\Support\Facades\Notification;

class HomeController extends Controller
{
     use Notifiable;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

     public function mail()
    {

        // Mail sending
        // $user=User::first();
        // $data=['name'=>'prabin'];
        // Mail::send('mail',$data,function($message) use($user){
        //     $message->to($user->email);
        //     $message->subject('Test Mail');
        // });

        // Notification sending

        // $user=User::first();
        // Notification::send($user->email,new sendnotification());
    }
}
