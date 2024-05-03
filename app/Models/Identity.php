<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Identity extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable = [
        'user_id',
        'account_id',
        'balances',
        'mask',
        'name',
        'official_name',
        'owners',
        'subtype',
        'type',
        'json_response',
    ];
    protected $hidden = [
        'deleted_at',
    ];

    protected $table = 'identity';
}
