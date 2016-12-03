<?php

namespace App;

use Illuminate\Database\Eloquent\Collection;
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

        $collection = new Collection();
        foreach ($products as $product) {

            if ($product->brand_id == $brand->id) {
                $collection[] = $product;
            }

        }

        return $collection;
    }

    public function getAllSiblings()
    {
        $collection = new Collection();
        
        foreach (Category::all() as $category) {
            
            if($this->parent_id == $category->parent_id) {
                $collection[] = $category;
            }
            
        }
        
        return $collection;
    }

    public function getChildrenProducts()
    {
        $collection = new Collection();

        foreach ($this->children() as $children) {

            foreach ($children->products()->get() as $product) {

                $collection[] = $product;
                
            }

        }

        return $collection;
    }
}
