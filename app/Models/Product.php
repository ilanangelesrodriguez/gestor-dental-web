<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Image;
use App\Models\Proveedor;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'stock',
        'status',
        'image',
        'category_id',
        'proveedor_id'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class);
    }
}
