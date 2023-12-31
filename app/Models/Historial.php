<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historial extends Model
{
    use HasFactory;

    public function patient(){
        return $this->belongsTo(Patient::class);
    }

    public function treatment(){
        return $this->belongsTo(Treatment::class);
    }
}
