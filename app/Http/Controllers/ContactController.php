<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SendContactForm;
use App\Mail\ContactUsReceived;
use App\Mail\ContactUsSent;
use Log;

class ContactController extends Controller
{
	public function index()
	{		
		return view('contact');	
	}
		
	public function send(SendContactForm $request)
	{		
		Log::debug('Darragh.');
		\Mail::to(request('email'))->send(new ContactUsReceived(request()->all()));
		\Mail::to(config('mail.inbox'))->cc(config('mail.cc'))->send(new ContactUsSent(request()->all()));
		
		return redirect('/contact')->with('message', 'Thank you for contacting us.');
	}
}
