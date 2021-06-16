<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategoryModel extends Model
{
    use HasFactory;

    protected $table='product_sub_category';

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'name_en',
        'slug',
        'is_enable',
        'created_at',
        'updated_at',
        'brand_id',
        'dealer_id',
        'category_id',
    ];

    public function dealer() {
        $this->belongsTo(DealerModel::class, 'dealer_id');
    }

    public function brand() {
        $this->belongsTo(BrandModel::class, 'brand_id');
    }

    public function category() {
        $this->belongsTo(ProductModel::class, 'category_id');
    }

    public function armorxCategory() {
        $this->belongsTo(ArmorxProductCateModel::class, 'category_id');
    }
}
