<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sesi extends Model
{
    use HasFactory;
    protected $fillable =[
        'Id_unit',
        'Id_game',
        'Id_user',
        'Id_opsi',
        'Waktu_mulai',
    ];
}
