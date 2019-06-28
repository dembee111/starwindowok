<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class html_block extends Model
{
    protected $fillable = [
         'title', 'slug', 'content'
    ];
}
