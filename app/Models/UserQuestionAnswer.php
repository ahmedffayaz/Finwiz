<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserQuestionAnswer extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable = [
        'user_id',
        'question_id',
        'answer',
        'type',
    ];

    public function question()
    {
        return $this->belongsTo(Question::class, 'question_id');
    }

    public function getAnswerAttribute($value)
    {
        if (auth()->user()->role->name !== 'admin' && auth()->user()->role->name !== 'super_admin' ) {
            if ($value && $this->attributes['type'] === 'array') {
                return json_decode($value);
            }
        }
        return $value;
    }
}
