<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Income extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table = 'income';

    protected $fillable = [
        'user_id',
        'account_id',
        'type',
        'pay_stubs',
        'w2s',
        'last_updated_plaid',
        'processing_status',
        'json_response',
    ];
    protected $hidden = [
        'deleted_at',
    ];
}
