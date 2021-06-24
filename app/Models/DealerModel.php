<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class DealerModel extends Model
{
    use HasFactory;
    protected $table='product_dealer';

    protected $fillable = [
        'name',
        'cover_img',
        'is_enable',
        'created_at',
        'updated_at',
        'slug'
    ];

    public function brands() {
        return $this->hasMany(BrandModel::class, 'dealer_id');
    }

    public function subCategories() {
        return $this->hasMany(SubCategoryModel::class, 'dealer_id');
    }
    
    function products() {
        return $this->hasMany(ProductAllModel::class);
    }
}
