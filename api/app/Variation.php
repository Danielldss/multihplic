<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Variation extends Model
{
    use SoftDeletes;
    protected $table = 'provider_value_variation';

    protected $fillable = [
        'atribute_id', 'company_id', 'product_id', 'name', 'value', 'stock', 'weight', 'height', 'width', 'length'

    ];

    public function atribute(){
        return $this->belongsTo('\App\Atribute', 'atribute_id', 'id');
    }

    public function provider(){
        return $this->belongsTo('\App\ProviderUser', 'company_id', 'id');
    }

    public function decimal($decimal){
        $decimal = self::slug($decimal);
        $decimal = number_format($decimal / 100, 2, '.', '');
        return $decimal;
    }

    public function valor($decimal){
        $arr = explode('.', $decimal);
        if(count($arr) != 1){
            $decimal = $decimal.'00';
        }else{
            $decimal = self::numerico($decimal);
        }
        $decimal = number_format($decimal / 100, 2, ',', '.');
        return $decimal;
    }

    public function fmtDecimal($valor){
        $valor = number_format($valor, "2", ",", ".");
        return $valor;
    }

    public function numerico($valor){

        $trocarIsso = array(',', ".",'-','(', ')',);
        $porIsso = array('',"",'','','',);
        $value = str_replace($trocarIsso, $porIsso, $valor);

        return $value;
    }
}
