<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;

class ProductsController extends Controller
{
    
    public function category($path)
    {
        $cat = Category::getByPath($path);
        $products = $cat->products()->paginate(9);
        $brands = Brand::all();
        $firstProduct = $cat->products()->get()->random();
        $randomize = $cat->products()->get()->random(14);

        return view('products.category', [
            'products' => $products,
            'category' => $cat,
            'brands' => $brands,
            'firstProduct' => $firstProduct,
            'randomize' => $randomize,
        ]);
    }

    public function subcategory($category, $subcategory)
    {

    }
}