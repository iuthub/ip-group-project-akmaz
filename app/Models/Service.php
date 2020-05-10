<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
    		'image', 'description'
    ];


    /**
     * Get all Services
     */
    public function getServices()
    {
    	return $this->all();
    }
}
