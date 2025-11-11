<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image',
        'type',
        'price',
        'available_from',
        'button_text',
    ];

    protected $casts = [
        'available_from' => 'datetime',
    ];
}
