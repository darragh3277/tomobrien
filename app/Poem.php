<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poem extends Model
{
    public function scopePublished($query)
    {
    	return $query->where('published', 1);
    }
    
    public static function alphaIndex()
    {
    	$poems = Poem::orderBy('title')->get();
    	
    	$alphaIndex = array();
    	
    	foreach ($poems as $poem)
    	{
    		$alphaIndex[] = $poem->title[0];
    	}
    	
    	return $alphaIndex;
    }
}
