<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Liability extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'account_id',
        'balances',
        'mask',
        'name',
        'official_name',
        'subtype',
        'type',
        'json_response',
    ];
    protected $hidden = [
        'deleted_at',
    ];

}
