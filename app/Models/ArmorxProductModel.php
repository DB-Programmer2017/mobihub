<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArmorxproductModel extends Model
{
    use HasFactory;
    protected $table='product_brand';

    protected $fillable = [
        'id',
        'dealer_id',
        'name',
        'is_enable',
        'created_at',
        'updated_at',
        'cover_img'
    ];

    // function newscate() {
    //     return $this->belongsTo(NewsCategoryModel::class, 'news_category');
    // }

    public function categories() {
        return $this->hasMany(ArmorxProductCateModel::class, 'brand_id', 'id');
    }
    //https://stackoverflow.com/questions/37760548/showing-category-and-subcategory-in-laravel

    public function subCategories() {
        return $this->hasManyThrough(SubCategoryModel::class, ArmorxProductCateModel::class, 'brand_id', 'category_id', 'id', 'id');
    }
}
