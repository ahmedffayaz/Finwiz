<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Asset extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'account_id',
        'balances',
        'historical_balances',
        'amount',
        'mask',
        'label',
        'name',
        'official_name',
        'owners',
        'ownership_type',
        'subtype',
        'type',
        'avatar',
        'json_response',
    ];
    protected $hidden = [
        'deleted_at',
    ];
}
