<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;

class AdminController extends Controller
{
    public function users(){
        $data['users'] = User::all();
        return view('admin.pages.users.index', $data);
    }

    public function categories(){
        $data['categories'] = Category::all();
        return view('admin.pages.categories.index', $data);
    }

    public function products(){
        $data['products'] = Product::all();
        return view('admin.pages.products.index', $data);
    }
}
