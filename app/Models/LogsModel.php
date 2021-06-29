<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogsModel extends Model
{
    use HasFactory;

    protected $table='logs';

    protected $fillable = [
        'user_id',
        'created_at',
        'updated_at',
        'status',
        'logout_at',
        'user_ip',
        'session_online'
    ];
}
