<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Proveedor;
use App\Models\PurchaseDetails;

class Purchase extends Model
{
    use HasFactory;

    protected $fillable = [
        'proveedor_id',
        'user_id',
        'purchase_date',
        'tax',
        'total',
        'status',
        'picture'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class);
        // , 'id', 'proveedor_id'
    }

    public function purchaseDetails()
    {
        return $this->hasMany(PurchaseDetails::class);
    }
}
