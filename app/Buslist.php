<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buslist extends Model
{
    protected $fillable = [
    	'name', 'type', 'number'
    ];
}
