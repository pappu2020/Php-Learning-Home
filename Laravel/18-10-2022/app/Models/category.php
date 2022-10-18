<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    use SoftDeletes;
    // protected $fillable = [
    //     'catagory_name ',
    //     'catagory_img',
    //     'added_by',
    // ];

    protected $guarded = ['id'];


    function rel_to_uesr(){
        return $this->belongsTo(User::class,'added_by');
    }
}
