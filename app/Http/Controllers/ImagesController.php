<?php

namespace App\Http\Controllers;

use App\Image;

class ImagesController extends Controller
{
    
	public function index()
	{
		
		$images = Image::all();
		
		return view('gallery', compact('images'));
		
	}
	
}
