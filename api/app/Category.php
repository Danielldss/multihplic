<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    protected $table = 'provider_category';

    protected $fillable = [
        'name', 'type', 'company_id', 'status', 'departament_id'
    ];

    public function provider(){
        return $this->belongsTo('\App\ProviderUser', 'company_id', 'id');
    }

    public function departament(){
        return $this->belongsTo('\App\Departament', 'departament_id', 'id');
    }

    public function subcategory(){
        return $this->hasMany('\App\Subcategory', 'category_id', 'id');
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
