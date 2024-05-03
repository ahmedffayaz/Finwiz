<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable = [
        'question',
        'options',
        'type',
        'i_e_text',
    ];
    protected $hidden = [
        'deleted_at',
    ];

    // Accessor for options attribute
    public function getOptionsAttribute($value)
    {
        if (auth()->user()->role->name !== 'admin' && auth()->user()->role->name !== 'super_admin' ) {
            return json_decode($value, true);
        }
        return $value;
    }
}
