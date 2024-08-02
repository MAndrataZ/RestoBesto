<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    protected $table = 'pesanan';
    protected $primaryKey = 'id_pesanan';
    public $incrementing = false; // Karena id_pesanan adalah VARCHAR
    protected $keyType = 'string'; // Karena id_pesanan adalah VARCHAR
    public $timestamps = false;

    // Definisikan relasi dengan DetailPesanan
    public function detailPesanan()
    {
        return $this->hasMany(DetailPesanan::class, 'id_pesanan', 'id_pesanan');
    }
}
