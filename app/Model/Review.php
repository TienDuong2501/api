<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
	// protected $table = 'reviews';
    public function products()
    {
    	return $this->belongsTo(Product::class);
    }
}
