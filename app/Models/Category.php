<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public $table = 'categories';
    public $timestamps = false;

    protected $fillable = [
    	'title'
    ];


}
