<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $table = 'guru';
    protected $fillable = [
        'nip_guru',
        'nama_guru',
        'foto_guru',
        'jabatan_guru',
        'mapel_diampu_guru',
        'jenis_kelamin_guru',
        'biodata_guru',
    ];
}
