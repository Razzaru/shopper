<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    
    protected $fillable = [];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public static function getByPath($path)
    {
        return Brand::where('path', '=', $path)->first();
    }
}
