<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Departament extends Model
{
    use SoftDeletes;
    protected $table = 'provider_departaments';

    protected $fillable = [
        'name', 'status', 'image', 'company_id', 'slug'
    ];

    public function provider()
    {
        return $this->belongsTo('\App\ProviderUser', 'id', 'company_id');
    }

    public function category()
    {
        return $this->hasMany('\App\Category', 'departament_id', 'id')->with('subcategory');
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
