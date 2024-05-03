<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Auth extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'auth';

    protected $fillable = [
        'user_id',
        'account_id',
        'balances',
        'mask',
        'name',
        'official_name',
        'subtype',
        'type',
        'numbers_ach',
        'numbers_bacs',
        'numbers_eft',
        'numbers_international',
        'json_response',
        'balances_available',
        'balances_current',
        'balances_iso_currency_code',
        'balances_limit',
        'balances_unofficial_currency_code',
    ];
    protected $hidden = [
        'deleted_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
