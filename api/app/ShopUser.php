<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ShopUser extends Model
{
    use SoftDeletes;
    protected $table = 'shop_rel_user';

    protected $fillable = [
        'user_id', 'shop_id'
    ];

    public function user() {
        return $this->belongsTo('\App\User')->where('main', '=', 'yes');
    }
}
