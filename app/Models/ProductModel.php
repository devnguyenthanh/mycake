<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    protected $table = 'products';
    const UPDATED_AT = null;
    protected $fillable = [
        'id',
        'name',
        'price',
        'image',
        
    ];
}
