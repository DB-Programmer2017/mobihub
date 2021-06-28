<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScaleFusionModel extends Model
{
    use HasFactory;

    protected $table='scalefusion';

    protected $fillable = [
        'name',
        'slug',
        'cover_img',
        'is_enable',
        'created_at',
        'updated_at',
        'rd',
        'description'
    ];
}
