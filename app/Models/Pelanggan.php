<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;

class Pelanggan extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = "pelanggan";
    // protected $guarded = ['id'];
    protected $primaryKey = 'id_pelanggan';
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
