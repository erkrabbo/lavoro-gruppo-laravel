<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class car extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'model',
        'brand',
        'year'
    ];
}
