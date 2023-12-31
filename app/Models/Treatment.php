<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price'
    ];

     // relacion de uno a uno
     public function historial(){
        return $this->hasOne(Historial::class);
    }
}
