<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visimisi extends Model
{
    use HasFactory;
    protected $table = "visi_misi";
    protected $d = "id";
    protected $fillable =[
        'title','content'
    ];
}
