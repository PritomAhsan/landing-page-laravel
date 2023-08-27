<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Product;
use Illuminate\Support\Str;

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

    public function categoriesAdd(){
        return view('admin.pages.categories.add');
    }

    public function categoriesInsert(Request $request){
        $cat = new Category;
        $cat->category_name = $request->input('category_name');
        $cat->slug = Str::slug($request->input('category_name'));
        $cat->status = $request->status;
        $cat->save();

        return redirect('admin/categories');
    }

    public function categoriesEdit($id){
        $data['category'] = Category::find($id);
        return view('admin.pages.categories.edit', $data);
    }

    public function categoriesUpdate(Request $request, $id){
        $cat = Category::find($id);
        $cat->category_name = $request->input('category_name');
        $cat->status = $request->status;
        $cat->save();

        return redirect('admin/categories');
    }


    public function subCategories(){
        $data['categories'] = SubCategory::with('category')->get();
        return view('admin.pages.sub-categories.index', $data);
    }

    public function subCategoriesAdd(){
        $data['categories'] = Category::all();
        return view('admin.pages.sub-categories.add', $data);
    }

    public function subCategoriesInsert(Request $request){
        $cat = new SubCategory;
        $cat->name = $request->input('name');
        $cat->slug = Str::slug($request->input('name'));
        $cat->category_id = $request->category_id;
        $cat->status = $request->status;
        $cat->save();

        return redirect('admin/sub-categories');
    }

    public function subCategoriesEdit($id){
        $data['sub_category'] = SubCategory::find($id);
        $data['categories'] = Category::all();
        return view('admin.pages.sub-categories.edit', $data);
    }

    public function subCategoriesUpdate(Request $request, $id){
        $cat = SubCategory::find($id);
        $cat->name = $request->input('name');
        $cat->category_id = $request->category_id;
        $cat->status = $request->status;
        $cat->save();

        return redirect('admin/sub-categories');
    }

    public function products(){
        $data['products'] = Product::with('category','subCategory')->get();
        // return $data['products'];
        return view('admin.pages.products.index', $data);
    }

    public function productsAdd(){
        $data['categories'] = Category::all();
        return view('admin.pages.products.add', $data);
    }

    public function subCat(Request $request)
    {

        $parent_id = $request->category_id;

        $subcategories = Category::where('id',$parent_id)
                              ->with('subcategories')
                              ->get();
        return response()->json([
            'subcategories' => $subcategories
        ]);
    }

    public function productsInsert(Request $request){

        if ($image = $request->file('image')) {
            $destinationPath = 'assets/img/products';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
        }


        $cat = new Product;
        $cat->product_name = $request->input('product_name');
        $cat->category_id = $request->category_id;
        $cat->sub_category_id = $request->sub_category_id;
        $cat->status = $request->status;
        $cat->image = $profileImage;
        $cat->save();

        // return redirect('admin/products');
        return back();
    }

    public function productsEdit($id){
        $data['product'] = Product::find($id);
        $data['categories'] = Category::all();
        $data['sub_categories'] = SubCategory::all();
        return view('admin.pages.products.edit', $data);
    }

    public function productsUpdate(Request $request, $id){




        $cat = Product::find($id);
        $cat->product_name = $request->input('product_name');
        $cat->category_id = $request->category_id;
        $cat->sub_category_id = $request->sub_category_id;
        $cat->status = $request->status;

        if ($image = $request->file('image')) {
            unset($product->image);

            $destinationPath = 'assets/img/products';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $cat->image = $profileImage;
        }


        $cat->save();

        return redirect('admin/products');
    }
}
