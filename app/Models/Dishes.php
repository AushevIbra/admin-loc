<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dishes extends Model
{
    //
    public $table = 'dishes';
    public $timestamps = false;

    public function category()
    {
        return $this->hasOne('App\Models\Category', 'id', 'category_id');
    }
}
