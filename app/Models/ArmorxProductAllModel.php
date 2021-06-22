<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArmorxProductAllModel extends Model
{
    use HasFactory;

    protected $table='product';

    protected $fillable = [
        'name',
        'name_en',
        'cover_img',
        'is_enable',
        'created_at',
        'description',
        'category_id',
        'sub_category_id',
        'brand_id',
        'dealer_id',
        'part_number',
        'product_tag',
        'price_sale',
        'is_quo',
        'stock_amount',
        'meta_tag'
    ];

    public function parent()
    {
        return $this->belongsTo(ArmorxProductCateModel::class, 'category_id');
    }

    public function children()
    {
        return $this->hasMany(ArmorxProductSubCateModel::class, 'sub_category_id');
    }

    // public function categories() {
    //     return $this->hasMany(ArmorxProductCateModel::class, 'brand_id', 'id')->with('productsList');
    // }
}
