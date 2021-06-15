<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class BrandModel extends Model
{
    use HasFactory;
    protected $table='product_brand';

    protected $fillable = [
        // 'name',
        // 'email',
        // 'password',

        'name',
        'name_en',
        'dealer_id',
        'cover_img',
        'is_enable',
        'created_at',
        'updated_at'
    ];

    function products() {
        return $this->hasMany(ProductAllModel::class);
    }
}
