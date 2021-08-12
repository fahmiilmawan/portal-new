<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KepsekModel extends Model
{
    use HasFactory;

    protected $table = 'kepalasekolah';
    protected $d = "id";
    protected $fillable = [
        'foto_kepsek', 'sambutan_kepsek'
    ];
}
