<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    
    protected $fillable = ['title', 'path', 'parent_id'];

    public function parent()
    {
        return Category::find($this->parent_id);
    }

    public function children()
    {
        return Category::all()->where('parent_id',[],$this->id);
    }
    
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public static function mainCats()
    {
        return Category::all()->where('parent_id', [], null);
    }

    public static function getByPath($path)
    {
        return Category::where('path', '=', $path)->first();
    }

    public function howMany(Brand $brand)
    {
        $products = $this->products()->get();

        $collection = [];
        foreach ($products as $product) {

            if ($product->brand_id == $brand->id) {
                $collection[] = $product;
            }

        }

        return $collection;
    }
}
