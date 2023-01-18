<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;

class Pelanggan extends Model
{
    use HasFactory;
    protected $table = "pelanggan";
    protected $guarded = ['id_pelanggan'];
    protected $primaryKey = 'id_pelanggan';
    protected $fillable = [
        'nama_pelanggan',
        'telepon_pelanggan',
        'alamat_pelanggan',
        'username_pelanggan',
        'password_pelanggan',
        'created_at',
        'updated_at',
    ];

    public function pembayaran()
    {
       return $this->hasMany(Pembayaran::class, 'id_pelanggan', 'id_pelanggan');
    }
}
