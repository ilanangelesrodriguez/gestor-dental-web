<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Odontologo extends Model
{
    use HasFactory;

    protected $table = 'odontologo';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre', 'especialidad', 'activo', 'dni'];
}
