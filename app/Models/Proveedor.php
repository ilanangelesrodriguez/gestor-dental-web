<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

    // determinando que campos de la tabla proveedor pueden añadirse
    // por asignacion masiva
    protected $fillable = [
        'name',
        'contacto',
        'phone'
    ];

    public function getRouteKeyName()
    {
        return 'name';
    }

    // relacion de uno a muchos
    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
