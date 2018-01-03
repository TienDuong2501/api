<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Product;

class Review extends Model
{
	protected $table = "reviews";
	protected $fillable = ['star','customer','review'];
    public function products()
    {
    	return $this->belongsTo(Product::class);
    }
}
