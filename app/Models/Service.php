<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_service_id',
        'service_name',
        'service_price_range',
        'service_description',
        'is_available',
    ];

    public function scopeFilter($query, array $filters)
    {
        if($filters['search'] ?? false) {
            $query->where('service_name', 'like', '%' . request('search') . '%');
        }
    }

    public function category_service() {
        return $this->belongsTo(CategoryService::class);
    }

    public function service_history() {
        return $this->belongsTo(ServiceHistory::class);
    }
}
