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

    public function brand() {
        return $this->belongsTo(ArmorxproductModel::class, 'brand_id');
    }

    //sub_categoty.category_id = category.id
    public function subCategories() {
        return $this->hasMany(SubCategoryModel::class, 'category_id', 'id');
                    // ->join('product', 'product.sub_category_id', '=', 'product_sub_category.id')->get();
    }


    public function products() {
        return $this->hasMany(ProductAllModel::class, 'category_id', 'id');
    }
}
