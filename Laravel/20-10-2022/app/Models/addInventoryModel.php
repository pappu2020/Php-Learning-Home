<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addInventoryModel extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    function rel_to_Products()
    {
        return $this->belongsTo(productModel::class, "product_id");
    } 
    
    function rel_to_color()
    {
        return $this->belongsTo(addColorModel::class, "Color_id");
    }
    function rel_to_size()
    {
        return $this->belongsTo(addSizeModel::class, "size_id");
    }


}
