<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InvestmentsTransaction extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'investment_type',
        'account_id',
        'amount',
        'cancel_transaction_id',
        'name',
        'date',
        'subtype',
        'type',
        'json_response',
        'fees',
        'investment_transaction_id',
        'iso_currency_code',
        'price',
        'quantity',
        'security_id',
        'unofficial_currency_code',
    ];
    protected $hidden = [
        'deleted_at',
    ];
}
