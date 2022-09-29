<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $fillable = [
        'idsupplier',
        'namasupplier',
        'alamatsupplier',
        'teleponsupplier',
        'idproduk',
        'hargaambil',
    ];
    protected $primaryKey = 'idsupplier';
    
    public function produk()
    {
        return $this->belongsTo(Produk::class, 'idproduk', 'idproduk');
    }
}
