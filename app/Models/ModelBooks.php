<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelBooks extends Model
{
    protected $table='book';
    protected $fillable=['title','pages','price','id_user'];

    public function relUsers()
    {
        return $this->hasOne('App\User','id','id_user');
    }
}
