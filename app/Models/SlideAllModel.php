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
        'rd',
        'description',
        'is_enable',
        'created_at',
        'updated_at',
        'cover_img',
        'rd',
        'size',
    ];

    const slide_sizes = [
        'Desktop'   => '1',
        'Tablet'    => '2',
        'Mobile'    => '3'
    ];

    public function isDesktop() {
        return $this->size == 1;
    }

    public function isTablet() {
        return $this->size == 2;
    }

    public function isMobile() {
        return $this->size == 3;
    }
}
