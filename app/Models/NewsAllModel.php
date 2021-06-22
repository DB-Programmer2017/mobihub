<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsAllModel extends Model
{
    use HasFactory;

    protected $table='news';

    protected $fillable = [
        'name',
        'category_id',
        'title',
        'description',
        'is_enable',
        'created_at',
        'updated_at',
        'cover_img'
    ];

    function news_category() {
        return $this->belongsTo(NewsCategoryModel::class,'category_id');
    }
}
