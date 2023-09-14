<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class ImageProducts extends Model
{
    use SoftDeletes;
    protected $table = 'image_products';

    protected $fillable = [
        'url', 'product_id'
    ];
}
