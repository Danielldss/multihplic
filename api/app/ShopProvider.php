<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ShopProvider extends Model
{
    use SoftDeletes;
    protected $table = 'shop_rel_provider';

    protected $fillable = [
        'shop_id', 'provider_id'
    ];

}
