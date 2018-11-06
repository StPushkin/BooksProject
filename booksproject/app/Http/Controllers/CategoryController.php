<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories=\App\Models\Category::all()->sortBy('name');
        return view('main',compact('categories'));
    }

    public function listBooksByID($id){
        $books=\App\Models\Book::where('category_id','=',$id)->get();
        $category=\App\Models\Category::where('id','=',$id)->first();
        $categories=\App\Models\Category::all()->sortBy('name');
        return view('main', ['books' => $books,'category'=>$category,'categories'=>$categories]);
    }

}
