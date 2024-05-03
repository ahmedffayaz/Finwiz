<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InvestmentsHolding extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'account_id',
        'cost_basis',
        'institution_price',
        'institution_price_as_of',
        'institution_price_datetime',
        'institution_value',
        'iso_currency_code',
        'quantity',
        'security_id',
        'unofficial_currency_code',
    ];
    protected $hidden = [
        'deleted_at',
    ];
}
