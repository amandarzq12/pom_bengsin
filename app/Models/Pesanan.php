<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Pesanan extends Model
{
    use HasFactory;
    protected $fillable = [
        'idpesanan',
        'created_at',
        'idpelanggan',
    ];

    protected $primaryKey = 'idpesanan';
    
    public function pembeli()
    {
        return $this->belongsTo(Pembeli::class, 'idpelanggan', 'idpelanggan');
    }
}
