<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;

class Pembayaran extends Model
{
    use HasFactory;
    protected $table = "pembayaran";
    protected $guarded = ['id_pembayaran'];
    protected $primaryKey = 'id_pembayaran';
    protected $dates = ['tgl_mulai','tgl_selesai'];
    
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

    public function pelanggan()
    {
       return $this->belongsTo(Pelanggan::class, 'id_pelanggan', 'id_pelanggan');
    }
}
