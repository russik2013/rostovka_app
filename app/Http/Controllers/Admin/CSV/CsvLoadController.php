<?php

namespace App\Http\Controllers\Admin\CSV;

use App\Category;
use App\Http\Requests\CsvPostRequest;
use App\Manufacturer;
use App\Season;
use App\Size;
use App\Type;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class CsvLoadController extends Controller
{
    public function index(){

        return view('csv_load');

    }

    public function csvShoesLoad(CsvPostRequest $request){

        $path = $request->file('files')->getRealPath();

        $products = Excel::load($path, function($reader) {
        })->get();


        $products = $this ->checkEmpty($products);



        dd($this -> formInsertArray($products));



        dd($products);

    }

    protected function checkEmpty($products){

        $exel_array_flag = 0;
        foreach ($products as $product){

            if($product -> artikul == null) {

                $products->forget($exel_array_flag);
            }

            $exel_array_flag++;

        }

        return $products;

    }

    protected function formInsertArray($products){

        $types = Type::all() -> pluck('id', 'name') -> toArray();
        $seasons = Season::all() -> pluck('id', 'name') -> toArray();
        $sizes = Size::all()  -> pluck('id', 'name') -> toArray();
        $categories = Category::all() -> pluck('id', 'name') -> toArray();
        $manufacturers = Manufacturer::all() -> pluck('id', 'name') -> toArray();
        $insert_array = [];

        //dd($sizes);


        foreach ($products as $product){
            dd($sizes[$product -> razmer_ot.'-'.$product -> razmer_do]);

            dd($product -> razmer_ot, $product -> razmer_do);


            if(isset($manufacturers[$product ->{'brend'}]))
                $manufacturer = $manufacturers[$product ->{'brend'}];
            else{
                $manufacturers = array_merge($manufacturers, $this ->addManufacturer($product ->{'brend'}));
                $manufacturer = $manufacturers[$product ->{'brend'}];
            }

            if($product ->nalichie == 'Есть')
                $show = 1;
            else
                $show = 0;

            if (isset($types[$product ->{'tip_obuvi'}]))
                $type = $types[$product ->{'tip_obuvi'}];
            else{
                $types = array_merge($types, $this ->addType($product ->{'tip_obuvi'}));
                $type = $types[$product ->{'tip_obuvi'}];
            }

            if(isset($seasons[$product ->{'sezon'}]))
                $season = $seasons[$product ->{'sezon'}];
            else{
                $seasons = array_merge($seasons, $this ->addSeason($product ->{'sezon'}));
                $season = $seasons[$product ->{'sezon'}];
            }



            //if(isset($sizes[$product ->{'sezon'}]))


            dd('russik');

//            $insert_array[] = [ 'article' => $product ->artikul,
//                                'name' => $product -> name,     ///////////////////////////// уточнить
//                                'rostovka_count' => $product ->{"min._kol"},
//                                'box_count' => $product ->kol_v_yashchike,
//                                'prise' => $product ->tsena_prodazhi,
//                                'manufacturer_id' => $manufacturer,
//                                'category_id' => $categories[$product ->kategoriya],
//                                'show_product' => $show,
//                                'currency' =>  'грн',
//                                'full_description' => $product ->opisanie,
//                                'discount' => $product ->skidka."%",
//                                'accessibility' => $show,
//                                'type_id' => $type,
//                                'season_id' => $season,
//                                'size_id' => $product ->,
//                                'sex' => $product ->];

            dd($product ->{"min._kol"});

        }

    }

    protected function addManufacturer($brend){

        $manufacturer = new Manufacturer();

        $manufacturer -> name = $brend;

        $manufacturer -> save();

        return [$brend => $manufacturer -> id];

    }

    protected function addType($tip){

        $type = new Type();

        $type -> name = $tip;

        $type -> save();

        return [$tip => $type -> id];

    }

    protected function addSeason($sezon){

        $season = new Season();

        $season -> name = $sezon;

        $season -> save();

        return [$sezon => $season -> id];



    }


}
