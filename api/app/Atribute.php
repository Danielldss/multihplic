<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Atribute extends Model
{
    use SoftDeletes;
    protected $table = 'provider_variation';

    protected $fillable = [
        'name', 'type', 'company_id'
    ];

    public function provider(){
        return $this->belongsTo('\App\ProviderUser', 'company_id', 'id');
    }

    public function variation() {
        return $this->hasMany('\App\Variation', 'atribute_id', 'id');
    }

}
