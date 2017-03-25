<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactUsReceived;
use App\Mail\ContactUsSent;

class ContactController extends Controller
{
	public function index()
	{
		return view('contact');
	
	}
	
	public function send()
	{
		
		$this->validate(request(), [
			'name' => 'required',
			'email' => 'required|email',
			'message' => 'required'
		]);
		
		\Mail::to(request('email'))->send(new ContactUsReceived(request()->all()));
		\Mail::to(config('mail.inbox'))->send(new ContactUsSent(request()->all()));
		
		return redirect('/contact')->with('message', 'Thank you for contacting us.');
	}
}
