<?php

namespace App\Http\Controllers;

use App\Mail\ContactEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact.contact-form-handler');
    }

    public function getData(Request $request)
    {
        Mail::to($request->input('email'))
        //which email should be actually send
        ->send(new ContactEmail());
        //return view('subscribe.subscribe');
        $request->session()->flash('message', 'Contact submited!');
       return redirect('/contact');

    }
}
