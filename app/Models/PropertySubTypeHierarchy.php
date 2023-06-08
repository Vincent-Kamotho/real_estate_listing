<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertySubTypeHierarchy extends Model
{
    use HasFactory;

    protected $fillable = [
        'property_type',
        'property_subtype',
        'property_name',
        'property_price',
        'image',
        'description',
    ];
}
