<?php

namespace App\Http\Controllers;

use App\Manufacturer;
use App\Product;
use App\Season;
use App\Size;
use App\Type;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function getFiltersValues($view){



        $types = Type::whereIn('id', Product::where('category_id', '=', $view -> category -> id) ->distinct()
            ->groupBy('type_id')
            ->pluck('type_id')) -> get();

        $seasons = Season::whereIn('id', Product::where('category_id', '=', $view -> category -> id) ->distinct()
            ->groupBy('season_id')
            ->pluck('season_id')) -> get();

        $sizes = Size::all();

        $manufacturers = Manufacturer::whereIn('id', Product::where('category_id', '=', $view -> category -> id) ->distinct()
            ->groupBy('manufacturer_id')
            ->pluck('manufacturer_id')) -> get();



//        dd(Product::where('category_id', '=', $view -> category -> id) ->distinct()
//            ->groupBy('season_id')
//            ->pluck('season_id'));

        $view->with(['types' => $types, 'seasons' => $seasons, 'sizes' => $sizes, 'manufacturers' => $manufacturers]);

    }

}
