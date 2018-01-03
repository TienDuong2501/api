<?php

namespace App\Exceptions;

use Exception;

class ProductNotBeLongsToUser extends Exception
{
    public function render()
    {
    	return ['errors' => 'Product Not Belongs To User'];
    }
}
