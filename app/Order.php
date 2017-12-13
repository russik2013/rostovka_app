<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['first_name','second_name','email','phone','address','info','komment','delivery_type','summ',
        'tovars_name','payment_type'];


}
