<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subCategoryModel extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    function rel_to_users()
    {
        return $this->belongsTo(User::class, 'added_by');
    }

    function rel_to_category()
    {
        return $this->belongsTo(category::class, 'category_id');
    }
}
