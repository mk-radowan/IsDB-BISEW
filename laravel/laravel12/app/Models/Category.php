<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relation\HasMany;   

class Category extends Model
{
    protected $fillable = [
        'cat_name'
       
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'categor');
    }
}



