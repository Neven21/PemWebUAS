<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    public $timestamps = false; //utk ilangin default colom
    protected $primaryKey = 'rating_id'; //overide ID sebagai primarykey
}
