<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function categories()    {
        return $this->belongsTo('App\Categories','category_id','id');
    }
}
