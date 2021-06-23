<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsCategoryModel extends Model
{
    use HasFactory;
    protected $table='news_category';

    protected $fillable = [
        'id',
        'name',
        'is_enable'
    ];

    function news() {
        return $this->hasMany(NewsAllModel::class,'category_id','id');
    }
}
