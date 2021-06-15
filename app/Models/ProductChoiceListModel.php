<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductChoiceListModel extends Model
{
    use HasFactory;

    protected $table='product_choice_detail';

    protected $fillable = [
        'name',
        'name_en',
        'product_id',
        'choice_id',
        'is_enable',
        'created_at',
        'updated_at'
    ];
}
