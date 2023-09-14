<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\ProviderUser;

class Provider extends Model
{
    use SoftDeletes;
    protected $table = 'provider_company';

    protected $fillable = [
        'type', 'socialName', 'fantasyName', 'emailCompany', 'situation',
        'status', 'address', 'number', 'complement', 'sector', 'city',
        'state', 'cep', 'cpfCnpj', 'observations', 'telephone'
    ];

    public function user(){
        return $this->belongsTo('\App\ProviderUser', 'company_id', 'id');
    }

}
