<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public static function valor($decimal){
        $decimal = str_replace(".", "", $decimal);
        $decimal = number_format($decimal / 100, 2, ',', '.');
        return $decimal;
    }

}
