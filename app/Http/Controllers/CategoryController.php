<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Place;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //

    public function show(Category $category)
    {
       
        return view('list',['places' =>$category->places()->get()]);
    }
}
