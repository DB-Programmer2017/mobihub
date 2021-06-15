<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductChoiceModel extends Model
{
    use HasFactory;

    protected $table='product_choice';

    protected $fillable = [
        'name',
        'name_en',
        'product_id',
        'cover_img',
        'is_enable',
        'created_at',
        'updated_at'
    ];
}
