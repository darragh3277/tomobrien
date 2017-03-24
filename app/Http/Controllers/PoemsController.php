<?php

namespace App\Http\Controllers;

use App\Poem;

class PoemsController extends Controller
{
    
	public function index()
	{
		
		$alphaPoems = array();
		
		$poems = Poem::published()->orderBy('title')->get();
		
		foreach ($poems as $poem){
			
			$alphaPoems[$poem->title[0]][] = $poem;
			
		}
		
		return view('poems.index', compact('alphaPoems'));
		
	}
	
	public function show($id)
	{
		
		$poem = Poem::find($id);
		
		return view('poems.show', compact('poem'));
		
	}
	
}
