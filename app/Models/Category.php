<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'parent_id',
    ];
    protected $hidden = [
        'deleted_at',
    ];
    public function userCategories()
    {
        return $this->belongsToMany(UserCategory::class, 'user_category_pivot', 'category_id', 'user_category_id');
    }

}
