<?php

namespace App\Http\Controllers;

use App\Manufacturer;
use App\Season;
use App\Size;
use App\Type;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function getFiltersValues($view){

        $types = Type::all();

        $seasons = Season::all();

        $sizes = Size::all();

        $manufacturers = Manufacturer::all();

        $view->with(['types' => $types, 'seasons' => $seasons, 'sizes' => $sizes, 'manufacturers' => $manufacturers]);

    }

}
