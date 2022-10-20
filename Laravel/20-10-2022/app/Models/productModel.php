<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productModel extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    function rel_to_category(){
        return $this->belongsTo(category::class, "category_id");
    } 
    function rel_to_Subcategory(){
        return $this->belongsTo(subCategoryModel::class, "Subcategory_id");
    } 
    function rel_to_Users(){
        return $this->belongsTo(User::class, "created_by");
    }
}
