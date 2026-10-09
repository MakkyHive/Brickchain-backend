<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
        'title',
        'description',
        'location',
        'property_value',
        'total_units',
        'unit_price',
        'available_units',
        'status',
    ];
}