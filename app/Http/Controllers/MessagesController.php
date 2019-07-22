<?php

namespace Carba\Http\Controllers;

use Carba\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller
{
    // Store Controller
    public function store()
    {
    	$msg = request()->validate([
    		'name' => 'required',
    		'email' => ['required', 'email'],
    		'subject' => 'required',
    		'content' => 'required|min:3'
    	], [
    		'name.required' => __('I need your fullname')
    	]);

        // Send email
        Mail::to('atencion@carba.edu.mx')->queue(new MessageReceived($msg));

        return view('layouts.contact');
    }
}
