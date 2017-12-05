<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($id){

        $category = Category::find($id);

        return view('user.category_page.category', compact('category'));

    }
}
