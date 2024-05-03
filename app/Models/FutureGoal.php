<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FutureGoal extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'future_goal';

    protected $fillable = [
        'category_id',
        'user_id',
        'purchase_name',
        'amount',
        'priority',
        'date',

    ];
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id'); // it should be one to one.
    }
    public function Users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id'); // it should be one to one.
    }
}
