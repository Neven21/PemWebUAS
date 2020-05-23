<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false; //utk ilangin default colom

    public function relation()
    {
        return $this->hasOne('App\Cart','product_id','id');
    }
}
