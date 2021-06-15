<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class ProductGalleryModel extends Model
{
    use HasFactory;

    protected $table='product_images';

    protected $fillable = [
        // 'name',
        // 'email',
        // 'password',
        'id',
        'product_id',
        'img',
        'is_enable',
        'created_at',
        'updated_at'
    ];

    function products() {
        return $this->hasMany(ProductAllModel::class);
    }
}
