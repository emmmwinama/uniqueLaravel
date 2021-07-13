<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Mail;
use App\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactAdmin;
use App\Mail\ContactUs;
use Illuminate\Support\Facades\Session;

class MiscController extends Controller
{
    public function services(){
        return view('misc.services');
    }

    public function blog(){
        return view('misc.blog');
    }

    public function about(){
        return view('misc.about');
    }

    public function send(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $data = [
            'name' => $request->name,
            'subject' => $request->subject,
            'email' => $request->email,
            'message' => $request->message
        ];

        Contact::create($request->all());

        //Mail::send(new ContactAdmin($data));
        Mail::send(new ContactUs($data));

        Session::flash('message', 'Your message has been received and our team will get to it as soon as possible. Thank you for talking to us.');

        return redirect('/#contacts-section');
    }
}
