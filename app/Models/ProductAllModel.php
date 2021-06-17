<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class ProductAllModel extends Model
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
        'brand_id',
        'dealer_id',
        'part_number',
        'product_tag',
        'price_sale',
        'is_quo',
        'stock_amount',
        'meta_tag'
    ];

    function category() {
        return $this->belongsTo(ProductModel::class);
    }

    function brand() {
        return $this->belongsTo(BrandModel::class);
    }

    function dealer() {
        return $this->belongsTo(DealerModel::class);
    }

    function productGallery() {
        return $this->hasMany(ProductGalleryModel::class);
    }

    function productChoiceList() {
        //return $this->hasMany(ProductChoiceListModel::class);

        return $this->hasManyThrough(ProductChoiceListModel::class, ProductChoiceModel::class, 'product_id', 'choice_id', 'id', 'id');
    }
}
