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
        'shipping_fee',
        'available_product',
        'is_available',
    ];

    public function scopeFilter($query, array $filters)
    {
        if($filters['search'] ?? false) {
            $query->where('product_name', 'like', '%' . request('search') . '%');
        }
    }

    public function category_product() {
        return $this->belongsTo(CategoryProduct::class);
    }

    public function order() {
        return $this->belongsTo(Order::class);
    }
}
