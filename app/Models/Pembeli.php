<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    use HasFactory;
    protected $fillable = [
        'idpelanggan',
        'namapelanggan',
        'alamatpelanggan',
        'teleponpelanggan',
    ];
    protected $primaryKey = 'idpelanggan';

}
