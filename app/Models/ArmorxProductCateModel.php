<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArmorxProductCateModel extends Model
{
    use HasFactory;
    protected $table='product_category';

    protected $fillable = [
        'id',
        'dealer_id',
        'brand_id',
        'name',
        'is_enable',
        'created_at',
        'updated_at',
        'cover_img'
    ];

    // function newscate() {
    //     return $this->belongsTo(NewsCategoryModel::class, 'news_category');
    // }
}
