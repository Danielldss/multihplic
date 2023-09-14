<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\ProviderUser;
use App\ImageProducts;

class  Product extends Model
{
    use SoftDeletes;
    protected $table = 'provider_products';

    protected $fillable = [
        'name', 'value', 'promotion_value', 'discount', 'short_description', 'long_description',
        'free_shipping', 'stock', 'weight', 'height', 'width', 'length', 'company_id',
        'departament_id', 'category_id', 'subcategory_id', 'status', 'codigo'
    ];

    public function user(){
        return $this->belongsTo('\App\ProviderUser', 'company_id', 'id');
    }

    public function images(){
        return $this->hasMany('\App\ImageProducts', 'product_id', 'id');
    }

    public function departament(){
        return $this->belongsTo('\App\Departament', 'departament_id', 'id')->with('category');
    }

    public function decimal($decimal){
        $decimal = str_replace(".", "", $decimal);
        $decimal = str_replace(",", ".", $decimal);
        $decimal = number_format($decimal / 100, 2, ',', '');
        return $decimal;
    }

    public function valor($decimal){
        $decimal = str_replace(".", "", $decimal);
        $decimal = number_format($decimal / 100, 2, ',', '.');
        return $decimal;
    }

    public function numerico($valor){
        $trocarIsso = array(",",'.',);
        $porIsso = array("",'',);
        $titletext = str_replace($trocarIsso, $porIsso, $valor);
        return strtolower($titletext);
    }

    public function slugify($text)
    {
        // replace non letter or digits by -
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        // trim
        $text = trim($text, '-');

        // remove duplicate -
        $text = preg_replace('~-+~', '-', $text);

        // lowercase
        $text = strtolower($text);

        if (empty($text)) {
            return 'n-a';
        }

        return $text;
    }


}
