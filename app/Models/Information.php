<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
   protected $fillable = [
    	'title', 'slug', 'description'
   ];


    /**
     * Get all Information
     */
    public function getInformation()
    {
    	return $this->all();
    }

    /**
     * Get information by slug
     */
    public function getInformationBySlug(string $slug)
    {
    	return $this->where('slug', $slug)->first();
    }
}
