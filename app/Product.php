<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable =['article','name','rostovka_count','box_count','prise','manufacturer_id','category_id',
        'show_product','currency','full_description','discount','accessibility','image_url','type_id','season_id',
        'size_id','sex',"material", "tip_vyazki", "prise_default", 'material', 'color', 'manufacturer_country', 'material_inside',
        'material_insoles', 'repeats'];


    public function season(){

        return $this -> belongsTo('App\Season','season_id','id');

    }

    public function manufacturer(){

        return $this -> belongsTo('App\Manufacturer','manufacturer_id','id');

    }

    public function category(){

        return $this -> belongsTo('App\Category','category_id','id');

    }

    public function type(){

        return $this -> belongsTo('App\Type','type_id','id');

    }

    public function size(){

        return $this -> belongsTo('App\Size','size_id','id');

    }

    public function photo(){

        return $this -> hasOne('App\ProductPhotos');

    }

}

//dd(Product::all());