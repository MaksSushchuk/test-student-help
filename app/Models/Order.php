<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'name',
        'contact_type',
        'contact_value',
        'work_type',
        'university',
        'deadline',
        'comment',
        'file_path',
        'status',
        'ip',
        'user_agent',
    ];

    protected $casts = [
        'deadline' => 'date',
    ];
}
