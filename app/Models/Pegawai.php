<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Pegawai extends Authenticatable
{
    protected $table = 'pegawai';

    protected $fillable = [
        'username', 'password', 'jabatan'
    ];

    public function getRoleAttribute()
    {
        return $this->jabatan;
    }
}

