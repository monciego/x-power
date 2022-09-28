<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryService extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_category'
    ];

    public function services() {
        return $this->hasMany(Service::class);
    }
}
