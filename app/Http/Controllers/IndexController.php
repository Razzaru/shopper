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
use App\Header;
use App\Product;

class IndexController
    extends Controller
{
    public function home()
    {
        $headers = Header::take(2)->get();
        $featuredActive = Product::all()->random(4);
        $featuredSecond = Product::all()->random(4);
        $latestActive = Product::take(4)->orderBy('id', 'desc')->get();
        $latestSecond = Product::take(4)->orderBy('id', 'desc')->offset(4)->get();
        return view('index', [
            'headers' => $headers,
            'featuredActive' => $featuredActive,
            'featuredSecond' => $featuredSecond,
            'latestActive' => $latestActive,
            'latestSecond' => $latestSecond
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