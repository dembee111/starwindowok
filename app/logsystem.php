<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class logsystem extends Model
{
	protected $fillable = ['user_id', 'log'];

	
    public function user(){
        return $this->belongsTo('App\User');
    }
}
