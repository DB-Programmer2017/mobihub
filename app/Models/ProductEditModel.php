<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class ProductEditModel extends Model
{
    use HasFactory;

    protected $table='product';

    protected $fillable = [
        'name',
        'name_en',
        'product_tag',
        'meta_tag',
        'description',
        'category_id',
        'brand_id',
        'part_number',
        'cover_img',
        'is_enable',
        'created_at',
        'updated_at'
    ];

    // function products() {
    //     return $this->hasMany(ProductAllModel::class);
    // }
}
