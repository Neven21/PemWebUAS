<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $timestamps = false; //utk ilangin default colom
    protected $primaryKey = 'cart_id'; //overide ID sebagai primarykey

    public function productrelation()
    {
        return $this->belongsTo('App\Product');
    }
}
