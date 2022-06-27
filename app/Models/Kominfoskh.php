<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kominfoskh extends Model
{
    protected $table = 'kominfoskh';
    protected $fillable = ['Nama', 'Keperluan', 'Alamat', 'Ruang', 'Status', 'Waktu', 'Status2', 'Waktu2', 'Foto'];
}
