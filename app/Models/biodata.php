<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class biodata extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nama_lengkap', 'jenis_kelamin', 'tanggal_lahir', 'tempat_lahir', 'agama', 'alamat', 'telepon', 'email'];
    public    $timestamp = true;
}
