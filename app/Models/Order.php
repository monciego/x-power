<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

     protected $dates = ['delivery_date'];

    protected $fillable = [
        'user_id',
        'product_id',
        'full_name',
        'email',
        'contact_number',
        'shipping_address',
        'status',
        'transaction_number',
        'delivery_date',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
