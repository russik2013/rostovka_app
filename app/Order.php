<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['first_name','last_name','email','phone','address','info','komment','shipping_method','summ',
        'payment_method'];

}
