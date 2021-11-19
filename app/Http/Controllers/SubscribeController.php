<?php

namespace App\Http\Controllers;

use App\Mail\SubscribeEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SubscribeController extends Controller
{
    public function subscribe()
    {
        return view('subscribe.subscribe');
    }

    public function getData(Request $request)
    {
        Mail::to($request->input('email'))
        //which email should be actually send
        ->send(new SubscribeEmail());
        //return view('subscribe.subscribe');
        $request->session()->flash('message', 'Suscribed!');
       return redirect('/subscribe');

    }
}
