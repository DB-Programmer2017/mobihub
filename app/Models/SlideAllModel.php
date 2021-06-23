<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SlideAllModel extends Model
{
    use HasFactory;

    protected $table='slide';

    protected $fillable = [
        'id',
        'description',
        'is_enable',
        'created_at',
        'updated_at',
        'cover_img',
        'rd'
    ];

}
