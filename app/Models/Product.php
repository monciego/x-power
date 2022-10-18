<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_product_id',
        'product_name',
        'product_price',
        'product_description',
        'product_image',
        'is_available',
    ];

    public function category_product() {
        return $this->belongsTo(CategoryProduct::class);
    }

    public function order() {
        return $this->belongsTo(Order::class);
    }
}
