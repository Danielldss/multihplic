<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProviderUser extends Model
{
    use SoftDeletes;
    protected $table = 'provider_user_company';

    protected $fillable = [
        'user_id', 'company_id'
    ];

    public function user() {
        return $this->belongsTo('\App\User')->where('main', '=', 'yes');
    }

}
