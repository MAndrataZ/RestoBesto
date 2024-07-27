<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    // Jika nama tabel tidak sesuai dengan penamaan konvensi Laravel, tentukan nama tabel secara eksplisit
    protected $table = 'menu';

    // Menentukan primary key yang digunakan
    protected $primaryKey = 'id_menu';

    public $incrementing = false;

    // Jika ada kolom yang bisa diisi massal, gunakan $fillable
    protected $fillable = [
        'id_menu',
        'nama_menu',
        'deskripsi_menu',
        'harga',
        'stok', 
        'gambar_menu',
    ];
}
