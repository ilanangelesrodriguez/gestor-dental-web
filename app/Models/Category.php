<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug'
    ];

    // metodo para retornar el slug de la categoria y no su id
    public function getRouteKeyName()
    {
        return 'slug';
    }

    // relacion uno a muchos
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
