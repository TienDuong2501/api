<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Review;

class Product extends Model
{
	protected $table = "products";
	protected $fillable = [
		'name','detail','stock','price','discount'
	];
	// protected $table = 'products';
    public function reviews()
    {
    	return $this->hasMany(Review::class);
    }
}
