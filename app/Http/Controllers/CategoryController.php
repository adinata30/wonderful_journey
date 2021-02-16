<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Article;
class CategoryController extends Controller
{
    public function viewCategory($name)
    {
        $category = Category::where('name',$name)->with('articles')->first();
        return view('category',[
            'category'=>$category,
        ]);

    }
}
