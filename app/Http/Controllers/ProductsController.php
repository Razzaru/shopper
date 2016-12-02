<?php

namespace App\Http\Controllers;

use App\Category;

class ProductsController extends Controller
{
    public function category($path)
    {
        $cat = Category::getByPath($path);
        $products = $cat->products()->paginate(9);

        return view('products.category', [
            'products' => $products,
            'category' => $cat
        ]);
    }

    public function subcategory($category, $subcategory)
    {

    }
}