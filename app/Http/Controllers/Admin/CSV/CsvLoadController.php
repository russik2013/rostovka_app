<?php

namespace App\Http\Controllers\Admin\CSV;

use App\Category;
use App\Http\Requests\CsvPostRequest;
use App\Manufacturer;
use App\Product;
use App\ProductPhotos;
use App\Season;
use App\Size;
use App\Type;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use ZipArchive;
use Illuminate\Support\Facades\File;

class CsvLoadController extends Controller
{
    public function index(){

        return view('csv_load');

    }

    public function edit(){

        return view('csv_load_edit');

    }

    public function checkDooble($products){

        $check_array = [];

        foreach ($products as $product){

            $check_array[] = [$product -> artikul, $product -> brend];

        }

        for($i = 0; $i < count($check_array); $i ++){

            for($j = 0; $j < count($check_array); $j ++){

                if($i != $j && $check_array[$i][0] == $check_array[$j][0] && $check_array[$i][1] == $check_array[$j][1]){

                    return true;

                }

            }

        }

        return false;

    }



    public function csvShoesDelete(CsvPostRequest $request){

        $path = $request->file('files')->getRealPath();

        $products = Excel::load($path, function($reader) {
        })->get();

        $products = $this ->checkEmpty($products);

        $delete_array = [];

        foreach ($products as $product){

            $delete_array[] = $product -> id;

        }

        Product::whereIn('id', $delete_array) -> delete();

        $photos = ProductPhotos::whereIn('product_id', $delete_array) -> pluck('photo_url');

        ProductPhotos::whereIn('product_id', $delete_array) -> delete();

        foreach ($photos as $photo){

            File::delete('images/products/' . $photo);

        }

    }


    public function csvShoesUpdate(CsvPostRequest $request){

        $path = $request->file('files')->getRealPath();

        $products = Excel::load($path, function($reader) {
        })->get();

        $products = $this ->checkEmpty($products);

        $this->productsUpdate($products);

        if($request -> photo) {

            $this->productsPhotoUpdate($request, $products);

            $this->photosRename($products);
        }

    }

    public function productsPhotoUpdate($photos, $products)
    {

        if ($photos->photo != "undefined") {
            $zip = new ZipArchive;
            $zip->open($photos->photo->getRealPath());
            $zip->extractTo('../images/products/');
            $zip->close();

            $products_mass = [];

            foreach ($products as $product) {

                $products_mass[$product->artikul . '_' . $product->{'brend'}] = [[$product->foto1, $product->foto2, $product->foto3]];

            }

            $data_base_products = Product::whereIn('name', array_keys($products_mass))->pluck('id', 'name')->toArray();

            foreach ($products_mass as $key => $photo_to_product_value) {

                foreach ($photo_to_product_value[0] as $item) {
                    if ($item) {
                        ProductPhotos::where('product_id', '=', $data_base_products[$key])
                            ->update(['photo_url' => $data_base_products[$key] . "_" . $item . '.jpg']);
                    }
                }
            }
        }

    }

    public function productsUpdate($products){

        $types = Type::all() -> pluck('id', 'name') -> toArray();
        $seasons = Season::all() -> pluck('id', 'name') -> toArray();
        $sizes = Size::all()  -> pluck('id', 'name') -> toArray();
        $categories = Category::all() -> pluck('id', 'name') -> toArray();
        $manufacturers = Manufacturer::all() -> pluck('id', 'name') -> toArray();
        $manufacturersInfo = Manufacturer::all();

        foreach ($products as $product){

            $product -> kategoriya = ucfirst(trim($product -> kategoriya));

            if($product -> kategoriya == 'Мужская')
                $sex = 'Мужской';
            if($product -> kategoriya == 'Женская')
                $sex = 'Женский';
            if($product -> kategoriya == 'Детская') {
                $product->pol = ucfirst(trim($product->pol));
                $sex = $product->pol;
            }


            if(isset($sizes[$product -> razmer]))
                $size = $sizes[$product -> razmer];
            else{
                $sizes = array_merge($sizes, $this ->addSize($product -> razmer));
                $size = $sizes[$product -> razmer];
            }


            if(isset($manufacturers[ ucfirst(trim($product ->{'brend'}))]))
                $manufacturer = $manufacturers[ ucfirst(trim($product ->{'brend'}))];
            else{
                $manufacturers = array_merge($manufacturers, $this ->addManufacturer($product ->{'brend'}));
                $manufacturer = $manufacturers[ ucfirst(trim($product ->{'brend'}))];
            }


            if (isset($types[ucfirst(trim($product ->{'tip_obuvi'}))]))
                $type = $types[ucfirst(trim($product ->{'tip_obuvi'}))];
            else{
                $types = array_merge($types, $this ->addType($product ->{'tip_obuvi'}));
                $type = $types[ucfirst(trim($product ->{'tip_obuvi'}))];
            }

            if(isset($seasons[ucfirst(trim($product ->{'sezon'}))]))
                $season = $seasons[ucfirst(trim($product ->{'sezon'}))];
            else{
                $seasons = array_merge($seasons, $this ->addSeason($product ->{'sezon'}));
                $season = $seasons[ucfirst(trim($product ->{'sezon'}))];
            }



            $priseWithDiscount = $product ->tsena_prodazhi;

            $manufacturersInfoToProduct = $manufacturersInfo ->find($manufacturers[$product ->{'brend'}]);

            if($manufacturersInfoToProduct ->koorse != "" || $manufacturersInfoToProduct ->koorse != 0 && $product->valyuta == "дол"){

                $priseWithDiscount *= $manufacturersInfoToProduct ->koorse;

            }

            if($manufacturersInfoToProduct ->discount !="" || $manufacturersInfoToProduct ->discount != 0) {


                $hrivna_discount = explode("грн",$manufacturersInfoToProduct ->discount);

                if(isset($hrivna_discount[1])){

                    $priseWithDiscount = $priseWithDiscount - $hrivna_discount[0];
                }

                $prozent_discount = explode("%",$manufacturersInfoToProduct ->discount);

                if(isset($prozent_discount[1])){

                    $priseWithDiscount = $priseWithDiscount - ( $priseWithDiscount * ($prozent_discount[0]/100) );
                }

            }

            if($product ->skidka !="" || $product ->skidka != 0) {


                $hrivna_discount = explode("грн",$product ->skidka);

                if(isset($hrivna_discount[1])){

                    $priseWithDiscount = $priseWithDiscount - $hrivna_discount[0];
                }

                $prozent_discount = explode("%",$product ->skidka);



                if(isset($prozent_discount[1])){

                    $priseWithDiscount = $priseWithDiscount - ( $priseWithDiscount * ($prozent_discount[0]/100) ) ;
                }

            }

            switch ($product ->kategoriya){

                case "Детская":
                    $categoryId = 1;
                    break;
                case "Мужская":
                    $categoryId = 2;
                    break;
                case "Женская":
                    $categoryId = 3;
                    break;
                default :
                    $categoryId = 4;

            }


            $insert_array = [ 'article' => $product ->artikul,
                'name' => $product ->artikul.' '.$product ->{'brend'},     ///////////////////////////// уточнить
                'rostovka_count' => $product ->{"min._kol"},
                'box_count' => $product ->kol_v_yashchike,
                'prise' => $priseWithDiscount,
                'prise_default' => $product ->tsena_prodazhi,
                'manufacturer_id' => $manufacturer,
                'category_id' => $categoryId,
                'show_product' => $product ->nalichie,
                'currency' =>  $product->valyuta,
                'full_description' => $product ->opisanie,
                'discount' => $product ->skidka,
                'accessibility' => $product ->nalichie,
                'type_id' => $type,
                'season_id' => $season,
                'size_id' => $size,
                "prise_zakup" => $product -> tsena_zakupki,
                'sex' => $sex,
                'material' => $product ->material_verkh,
                'color' => $product -> tsvet,
                'manufacturer_country' => $product ->strana_proizvoditel,
                'material_inside' => $product ->material_vnutri,
                'material_insoles' => $product ->material_stelki,
                'repeats' => $product ->povtory,


            ];

            Product::find($product->id)->update($insert_array);

        }

    }

    public function csvShoesLoad(CsvPostRequest $request){

        $path = $request->file('files')->getRealPath();

        $products = Excel::load($path, function($reader) {
        })->get();

        $products = $this ->checkEmpty($products);

        if($this ->checkDooble($products))

            return response('Check file, program find doodles', 404);
        
        else {

            Product::insert($this->formInsertArray($products));

            ProductPhotos::insert($this->formPhotoInsertArray($request, $products));

            $this->photosRename($products);

            return response('all date was upload', 200);
        }

    }

    protected function photosRename($products){

        $products_mass = [];

        foreach ($products as $product){

            $products_mass[$product ->artikul.' '.$product ->{'brend'}] = [[$product -> foto1,$product -> foto2,$product -> foto3]];

        }

        $data_base_products = Product::whereIn('name', array_keys($products_mass)) -> pluck('id', 'name') ->toArray();

        //dd($products_mass, $data_base_products);

        foreach ($products_mass as $key => $photo_to_product_value){

            foreach ($photo_to_product_value[0] as $item){
                if(is_numeric($item)){
                    if($item && file_exists('../images/products/'.(integer)$item.'.jpg'))
                        File::move('../images/products/'.(integer)$item.'.jpg', 'images/products/' . $data_base_products[$key]."_". $item.'.jpg');

                }else{
                    if($item && file_exists('../images/products/'.$item.'.jpg'))
                        File::move('../images/products/'.$item.'.jpg', 'images/products/' . $data_base_products[$key]."_". $item.'.jpg');

                }

            }
        }

    }

    protected function formPhotoInsertArray($photos, $products){

        $zip = new ZipArchive;
        $zip->open($photos -> photo -> getRealPath());
        $zip->extractTo('../images/products/');
        $zip->close();



        $products_mass = [];

        foreach ($products as $product){

            $products_mass[$product ->artikul.' '.$product ->{'brend'}] = [[$product -> foto1,$product -> foto2,$product -> foto3]];

        }

        $data_base_products = Product::whereIn('name', array_keys($products_mass)) -> pluck('id', 'name') ->toArray();

        $photos_to_products_insert_array = [];

        foreach ($products_mass as $key => $photo_to_product_value){

            foreach ($photo_to_product_value[0] as $item){
                if($item) {

                    $photos_to_products_insert_array[] = ['photo_url' => $data_base_products[$key] . "_" . $item . '.jpg',
                        'product_id' => $data_base_products[$key]];
                }

            }
        }

       return $photos_to_products_insert_array;

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

        //dd($products);

        $types = Type::all() -> pluck('id', 'name') -> toArray();
        $seasons = Season::all() -> pluck('id', 'name') -> toArray();
        $sizes = Size::all()  -> pluck('id', 'name') -> toArray();
        $categories = Category::all() -> pluck('id', 'name') -> toArray();
        $manufacturers = Manufacturer::all() -> pluck('id', 'name') -> toArray();
        $manufacturersInfo = Manufacturer::all();
        $insert_array = [];

        foreach ($products as $product){

            $product -> kategoriya = ucfirst(trim($product -> kategoriya));

            if($product -> kategoriya == 'Мужская')
                $sex = 'Мужской';
            if($product -> kategoriya == 'Женская')
                $sex = 'Женский';
            if($product -> kategoriya == 'Детская') {
                $product -> pol = ucfirst(trim($product -> pol));
                $sex = $product->pol;
            }


            if(isset($sizes[$product -> razmer]))
                $size = $sizes[$product -> razmer];
            else{
                $sizes = array_merge($sizes, $this ->addSize($product -> razmer));
                $size = $sizes[$product -> razmer];
            }


            if(isset($manufacturers[ucfirst(trim($product ->{'brend'}))]))
                $manufacturer = $manufacturers[ucfirst(trim($product ->{'brend'}))];
            else{
                $manufacturers = array_merge($manufacturers, $this ->addManufacturer($product ->{'brend'}));
                $manufacturer = $manufacturers[ucfirst(trim($product ->{'brend'}))];
            }

            if (isset($types[ucfirst(trim($product ->{'tip_obuvi'}))]))
                $type = $types[ucfirst(trim($product ->{'tip_obuvi'}))];
            else{
                $types = array_merge($types, $this ->addType($product ->{'tip_obuvi'}));
                $type = $types[ucfirst(trim($product ->{'tip_obuvi'}))];
            }

            if(isset($seasons[ucfirst(trim($product ->{'sezon'}))]))
                $season = $seasons[ucfirst(trim($product ->{'sezon'}))];
            else{
                $seasons = array_merge($seasons, $this ->addSeason($product ->{'sezon'}));
                $season = $seasons[ucfirst(trim($product ->{'sezon'}))];
            }



            $priseWithDiscount = $product ->tsena_prodazhi;

            $manufacturersInfoToProduct = $manufacturersInfo ->find($manufacturers[$product ->{'brend'}]);

            if($manufacturersInfoToProduct ->koorse != "" && $manufacturersInfoToProduct ->koorse != 0 && $product->valyuta == "дол"){

                $priseWithDiscount *= $manufacturersInfoToProduct ->koorse;

            }

            if($manufacturersInfoToProduct ->discount !="" && $manufacturersInfoToProduct ->discount != 0) {


                $hrivna_discount = explode("грн",$manufacturersInfoToProduct ->discount);

                if(isset($hrivna_discount[1])){

                    $priseWithDiscount = $priseWithDiscount - $hrivna_discount[0];
                }

                $prozent_discount = explode("%",$manufacturersInfoToProduct ->discount);

                if(isset($prozent_discount[1])){

                    $priseWithDiscount = $priseWithDiscount - ( $priseWithDiscount * ($prozent_discount[0]/100) );
                }

            }

            if($product ->skidka !="" && $product ->skidka != 0) {


                $hrivna_discount = explode("грн",$product ->skidka);

                if(isset($hrivna_discount[1])){

                    $priseWithDiscount = $priseWithDiscount - $hrivna_discount[0];
                }

                $prozent_discount = explode("%",$product ->skidka);



                if(isset($prozent_discount[1])){

                    $priseWithDiscount = $priseWithDiscount - ( $priseWithDiscount * ($prozent_discount[0]/100) ) ;
                }

            }

            switch ($product ->kategoriya){

                case "Детская":
                    $categoryId = 1;
                    break;
                case "Мужская":
                    $categoryId = 2;
                    break;
                case "Женская":
                    $categoryId = 3;
                    break;
                default :
                    $categoryId = 4;

            }


            $insert_array[] = [ 'article' => $product ->artikul,
                                'name' => $product ->artikul.' '.$product ->{'brend'},     ///////////////////////////// уточнить
                                'rostovka_count' => $product ->{"min._kol"},
                                'box_count' => $product ->kol_v_yashchike,
                                'prise_default' => $product ->tsena_prodazhi,
                                'prise' => $priseWithDiscount,
                                'manufacturer_id' => $manufacturer,
                                'category_id' => $categoryId,
                                'show_product' => $product ->nalichie,
                                'currency' =>  $product->valyuta,
                                'full_description' => $product ->opisanie,
                                'discount' => $product ->skidka,
                                'accessibility' => $product ->nalichie,
                                'type_id' => $type,
                                'season_id' => $season,
                                'size_id' => $size,
                                "prise_zakup" => $product -> tsena_zakupki,
                                'sex' => $sex,
                                'material' => $product ->material_verkh,
                                'color' => $product -> tsvet,
                                'manufacturer_country' => $product ->strana_proizvoditel,
                                'material_inside' => $product ->material_vnutri,
                                'material_insoles' => $product ->material_stelki,
                                'repeats' => $product ->povtory,
                                ];
        }


        return $insert_array;

    }

    protected function addSize($min){

        $size = new Size();

        $size ->name = $min;

        $size_norm = explode('-', $min);

        $size ->min = $size_norm[0];

        $size ->max = $size_norm[1];

        $size -> save();

        return [$min => $size -> id];

    }

    protected function addManufacturer($brend){

        $manufacturer = new Manufacturer();

        $manufacturer -> name =ucfirst(trim($brend));

        $manufacturer -> save();

        return [$brend => $manufacturer -> id];

    }

    protected function addType($tip){

        $type = new Type();

        $type -> name = ucfirst(trim($tip));

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
