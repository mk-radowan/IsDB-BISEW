<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
     'category',
        'price',
        'status'
    ];

    // protected $forigenKey = 'category';

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
