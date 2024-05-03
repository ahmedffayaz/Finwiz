<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionInsight extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'transaction_id',
        'month',
        'year',
        'category',
        'total',
    ];
    public function getCategoryAttribute($value)
    {
        if (auth()->user()->role->name !== 'admin' && auth()->user()->role->name !== 'super_admin' ) {
            return json_decode($value, true);
        }
        return $value;
    }
}
