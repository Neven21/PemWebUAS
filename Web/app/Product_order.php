<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_order extends Model
{
    public $timestamps = false; //utk ilangin default colom
    protected $primaryKey = 'order_id'; //overide ID sebagai primarykey
}
