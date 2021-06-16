<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class ProductModel extends Authenticatable
{
    use HasFactory, Notifiable;
    
    protected $table='product_category';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'dealer_id',
        'name_en',
        'size',
        'cover_img',
        'is_enable',
        'created_at',
        'updated_at',
        'brand_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    function products() {
        return $this->hasMany(ProductAllModel::class);
    }

    function dealer() {
        return $this->belongsTo(DealerModel::class);
    }

    public function brand() {
        return $this->belongsTo(BrandModel::class, 'brand_id');
    }
}
