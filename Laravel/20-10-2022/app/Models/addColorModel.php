<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addColorModel extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    function rel_to_Users()
    {
        return $this->belongsTo(User::class, "created_by");
    }
}
