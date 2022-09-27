<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_category'
    ];

    public function products() {
        return $this->hasMany(Product::class);
    }
}
