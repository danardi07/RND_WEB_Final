<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proyek extends Model
{
    protected $fillable = ['judul', 'deskripsi', 'gambar'];
}
