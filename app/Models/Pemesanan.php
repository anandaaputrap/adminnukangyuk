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
    protected $primaryKey = 'id_pesan';
    protected $fillable = [
        'tgl_mulai',
        'tgl_selesai',
        'username_tukang',
        'keahlian_tukang',
        'id_pelanggan',
        'status_pesan',
        'created_at',
        'updated_at',
    ];
}
