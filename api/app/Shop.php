<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Shop extends Model
{
    use SoftDeletes;
    protected $table = 'shop_company';

    protected $fillable = [
        'name', 'socialName',
        'email', 'telephone',
        'celphone', 'cpf',
        'cnpj', 'rg',
        'address', 'number',
        'sector', 'complement',
        'city', 'state',
        'status', 'category',
        'cep', 'url'
    ];

    public function user(){
        return $this->belongsTo('\App\ShopUser', 'id', 'shop_id');
    }
}
