<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Self_;

class Product extends Model
{
    //
    public static function apple(){
        return     $products = self::where('name','like','%iphone%')->get();

    }
}
