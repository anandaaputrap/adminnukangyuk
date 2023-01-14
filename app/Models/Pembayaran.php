<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;

class Pembayaran extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = "pembayaran";
    // protected $guarded = ['id'];
    protected $primaryKey = 'id_pembayaran';
    protected $fillable = [
        'username_tukang',
        'keahlian_tukang',
        'tgl_mulai',
        'tgl_selesai',
        'total',
        'bukti_byr',
        'status',
        'id_pelanggan',
        'created_at',
        'updated_at',
    ];
}
