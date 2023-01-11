<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;

class Pemesanan extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = "pemesanan";
    // protected $guarded = ['id'];
    protected $primaryKey = 'id';
    protected $fillable = [
        'tgl_mulai',
        'tgl_selesai',
        'nama_pelanggan',
        'nama_tukang',
        'keahlian_tukang',
        'id_pelanggan',
        'id_tukang',
        'status_pesan',
        'created_at',
        'updated_at',
    ];
}
