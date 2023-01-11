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
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_pelanggan',
        'telepon_pelanggan',
        'alamat_pelanggan',
        'username_pengelola',
        'password_pengelola',
        'created_at',
        'updated_at',
    ];
}
