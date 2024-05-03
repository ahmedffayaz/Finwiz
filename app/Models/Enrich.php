<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Enrich extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable = [
        'user_id',
        'account_id',
        'amount',
        'description',
        'direction',
        'enrichments',
        'plaid_id',
        'iso_currency_code',
        'json_response',
    ];
    protected $hidden = [
        'deleted_at',
    ];

    protected $table = 'enrich';
}
