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
}
