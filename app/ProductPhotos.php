<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductPhotos extends Model
{
    protected $fillable = ['photo_url', 'product_id'];
}
