<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SejarahSingkat extends Model
{
    use HasFactory;

    protected $table = 'sejarahsingkat';
    protected $d = "id";
    protected $fillable = [
        'sejarah_singkat'
    ];
}
