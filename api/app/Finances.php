<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Finances extends Model
{
    use SoftDeletes;
    protected $table = 'provider_requests';

}
