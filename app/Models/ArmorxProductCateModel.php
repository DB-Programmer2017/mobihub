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
        'slug',
        'is_enable',
        'created_at',
        'updated_at',
        'cover_img'
    ];

    public function brand() {
        return $this->belongsTo(ArmorxproductModel::class, 'brand_id');
    }

    public function subCategories() {
        return $this->hasMany(SubCategoryModel::class, 'category_id', 'id');
    }
}
