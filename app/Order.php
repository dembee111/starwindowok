<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	protected $fillable = [
		'cutomer_id', 
		'window_type', 
		'window_size', 
		'window_price', 
		'window_quantity', 
		'order_address'
	];

    public function customer(){

    	return $this->belongsTo('App\Customer');
    }

    public function scopeNeworder($query)
    {
    	return $query->where('status', 1)->orderBy('id', 'desc');
    }

     public function scopeOldorder($query)
    {
    	return $query->where('status', 2)->orWhere('status', 0);
    }
}
