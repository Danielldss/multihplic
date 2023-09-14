<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Requests extends Model
{
    use SoftDeletes;
    protected $table = 'provider_requests';

    protected $fillable = [
        'id', 'company_id', 'shipping_id', 'sessao', 'total'
    ];

}
