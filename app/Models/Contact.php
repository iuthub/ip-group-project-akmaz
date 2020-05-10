<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
    	'name', 'email', 'text'
    ];


    public function StoreData(array $data)
    {
    	return $this->create($data);
    }
}
