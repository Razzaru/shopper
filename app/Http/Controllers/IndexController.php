<?php
/**
 * Created by PhpStorm.
 * User: Razzaru
 * Date: 01.12.2016
 * Time: 18:07
 */

namespace App\Http\Controllers;


use App\Category;

class IndexController
    extends Controller
{
    public function home()
    {
        $categories = Category::all()->where('parent_id', [], null);
        return view('index', [
            'categories' => $categories,
        ]);
    }

    public function test()
    {

    }
}