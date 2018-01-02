<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Product;

class Review extends Model
{
	protected $table = "reviews";
    public function products()
    {
    	return $this->belongsTo(Product::class);
    }
}
