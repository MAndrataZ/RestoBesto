<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_pesanan',
        'nomor_meja',
        'tanggal',
        'total',
        'status',
    ];

    public function menus()
    {
        return $this->belongsToMany(Menu::class)->withPivot('jumlah', 'harga');
    }
}
