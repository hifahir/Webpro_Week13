<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class listPegawai extends Model
{
    protected $fillable = ['nama', 'posisi', 'gaji'];
    protected $table = 'list_pegawais';
}
