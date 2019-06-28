<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['phone', 'title', 'email', 'name', 'text'];


    public function order(){
    	return $this->hasMany('App\Order');
    }
}
