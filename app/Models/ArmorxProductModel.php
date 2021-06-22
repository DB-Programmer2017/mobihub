<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArmorxproductModel extends Model
{

    use HasFactory;

    // protected $table='product';

    // protected $fillable = [
    //     'name',
    //     'name_en',
    //     'cover_img',
    //     'is_enable',
    //     'created_at',
    //     'description',
    //     'category_id',
    //     'sub_category_id',
    //     'brand_id',
    //     'dealer_id',
    //     'part_number',
    //     'product_tag',
    //     'price_sale',
    //     'is_quo',
    //     'stock_amount',
    //     'meta_tag'
    // ];

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

    public function brands() {
        return $this->hasMany(BrandModel::class, 'id', 'id');
     }

    public function categories() {
       return $this->hasMany(ArmorxProductCateModel::class, 'brand_id', 'id');
    }

    public function productsList() {
        return $this->belongsTo(ProductAllModel::class, 'id', 'category_id');
    }


    //https://stackoverflow.com/questions/37760548/showing-category-and-subcategory-in-laravel

    public function subCategories2() {
       return $this->hasManyThrough(SubCategoryModel::class, ArmorxProductCateModel::class, 'brand_id', 'category_id', 'id', 'id');
    }

    public function products() {
        return $this->hasManyThrough(ProductAllModel::class, SubCategoryModel::class, 'brand_id', 'sub_category_id', 'id', 'id' );
    }
}
