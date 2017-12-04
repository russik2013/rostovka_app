<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $fillable = ['name'];

    public function products(){

        return $this -> hasMany('App\Product','category_id','id');

    }
}
