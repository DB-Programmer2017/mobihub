<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsAllModel extends Model
{
    use HasFactory;

    protected $table='news';

    protected $fillable = [
        'id',
        'name',
        'category_id',
        'title',
        'description',
        'is_enable',
        'created_at',
        'updated_at',
        'recommen',
        'cover_img',
        'slug'
    ];

    function news_category() {
        return $this->belongsTo(NewsCategoryModel::class,'category_id');
    }

    //จำนวนผู้อ่านโพส
    public function incrementReadCount() {
        $this->reads++;
        return $this->save();
    }
}
