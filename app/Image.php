<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
	public function scopeThumbnails($query)
    {
    	return $query->where('thumbnail', 1);
    }
}
