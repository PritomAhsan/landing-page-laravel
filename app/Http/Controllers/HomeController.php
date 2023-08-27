<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Product;

class HomeController extends Controller
{
    public function index(){
        $data['categories'] = Category::with('subcategories')->where('status',1)->get();
        $data['sub_categories'] = SubCategory::where('status',1)->get();
        $data['products'] = Product::with('category','subCategory')->where('status',1)->get();
        return view('website.home',$data);
    }
}
