<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Self_;

class Product extends Model
{
    protected $fillable = ['name','description'];
    public static function search($search){
        return     $products = self::where('name','like','%'.$search.'%')->get();

    }
}
