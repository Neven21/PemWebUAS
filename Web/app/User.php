<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class User extends Model implements Authenticatable
{
    use AuthenticableTrait;
    protected $primaryKey = 'username'; //overide ID sebagai primarykey
    public $timestamps = false; //utk ilangin default colom
    public $incrementing = false; //kalo ga ntr di cast jd INT
}
