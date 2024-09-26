<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getProductsByCategory($categoryId)
    {
        $products = Product::where('category_id', $categoryId)->get();
       
        $category = Category::where('id',$categoryId)->firstOrFail();

        return view('product',[
            "product" => $products,
            "category" => $category
        ]);
    }
}
