<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Request;

class ProductsController extends Controller
{
    
    public function category($category)
    {
        $category = Category::getByPath($category);
        return view('products.category', compact('category'));
    }

    public function subcategory($category, $subcategory)
    {
        $cat = Category::getByPath($subcategory);
        $products = $cat->products()->paginate(9);
        $brands = Brand::all();

        $firstProduct = $cat->products()->get()->random();
        $randomize = $cat->products()->get()->random(14);

        return view('products.subcategory', [
            'products' => $products,
            'category' => $cat,
            'brands' => $brands,
            'firstProduct' => $firstProduct,
            'randomize' => $randomize,
        ]);
    }

    public function brand($category, $subcategory, $brand)
    {
        $br = Brand::getByPath($brand);
        $cat = Category::getByPath($subcategory);

        $products = $br->products()->where('category_id', '=', $cat->id)->paginate(9);
        $brands = Brand::all();

        $firstProduct = $br->products()->get()->random();
        $randomize = $br->products()->get()->random(14);

        return view('products.brand', [
            'category' => $cat,
            'brands' => $brands,
            'firstProduct' => $firstProduct,
            'randomize' => $randomize,
            'products' => $products,
        ]);
    }
}