<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable =['article','name','rostovka_count','box_count','prise','manufacturer_id','category_id',
        'show_product','currency','fill_description','discount','accessibility','stamps','image_url','type_id','season_id',
        'size_id'];


}
