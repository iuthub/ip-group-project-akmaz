<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
    		'name', 'price'
    ];

    public function getProducts()
    {
    	return $this->all();
    }

}
