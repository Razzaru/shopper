<?php
/**
 * Created by PhpStorm.
 * User: Razzaru
 * Date: 01.12.2016
 * Time: 18:07
 */

namespace App\Http\Controllers;


use App\Brand;
use App\Category;
use App\Product;

class IndexController
    extends Controller
{
    public function home()
    {
        $categories = Category::mainCats();
        return view('index', [
            'categories' => $categories,
        ]);
    }

    public function test()
    {
        dd(Category::find(1)->getChildrenProducts());
        /*
        Category::create([
            'title' => 'Одежда',
            'path' => 'clothes',
            'parent_id' => 1
        ]);

        Category::create([
            'title' => 'Обувь',
            'path' => 'shoes',
            'parent_id' => 1
        ]);

        Category::create([
            'title' => 'Аксессуары',
            'path' => 'accessories',
            'parent_id' => 1
        ]);

        Category::create([
            'title' => 'Спорт',
            'path' => 'sports',
            'parent_id' => 1
        ]);

        Category::create([
            'title' => 'Красота',
            'path' => 'beauty',
            'parent_id' => 1
        ]);

        Category::create([
            'title' => 'Одежда',
            'path' => 'clothes',
            'parent_id' => 2
        ]);

        Category::create([
            'title' => 'Обувь',
            'path' => 'shoes',
            'parent_id' => 2
        ]);

        Category::create([
            'title' => 'Аксессуары',
            'path' => 'accessories',
            'parent_id' => 2
        ]);

        Category::create([
            'title' => 'Спорт',
            'path' => 'sports',
            'parent_id' => 2
        ]);

        Category::create([
            'title' => 'Красота',
            'path' => 'beauty',
            'parent_id' => 2
        ]);

        Category::create([
            'title' => 'Девочкам',
            'path' => 'girls',
            'parent_id' => 1
        ]);

        Category::create([
            'title' => 'Мальчикам',
            'path' => 'boys',
            'parent_id' => 1
        ]);

        Category::create([
            'title' => 'Новорождённым',
            'path' => 'newborn',
            'parent_id' => 1
        ]);
        */
    }
}