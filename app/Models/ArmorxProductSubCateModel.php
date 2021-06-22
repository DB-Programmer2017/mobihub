<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArmorxProductSubCateModel extends Model
{
    use HasFactory;

    protected $table='product_category_sub';

    protected $fillable = [
        'id',
        'category_id_main',
        'name',
        'slug',
        'is_enable',
        'created_at',
        'updated_at',
        'cover_img'
    ];
}
