<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    protected $fillable = ['name','street','numberContainer','firstName','secondName','phone','discount'];

    public function products(){

        return $this -> hasMany('App\Product','category_id','id');

    }
}



