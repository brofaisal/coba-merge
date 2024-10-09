<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;
    protected $fillable =[
        'Id_sesi',
        'Tanggal_laporan',
        'Total_sesi',
        'Total_pendapatan',
        
    ];

}
