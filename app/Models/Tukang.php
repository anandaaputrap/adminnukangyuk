<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;

class Tukang extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = "tukang";
    // protected $guarded = ['id'];
    protected $primaryKey = 'id_tukang';
    protected $fillable = [
        'nama_tukang',
        'telepon_tukang',
        'alamat_tukang',
        'username_tukang',
        'password_tukang',
        'keahlian_tukang',
        'tarif_tukang',
        'norek_tukang',
        'status_tukang',
        'created_at',
        'updated_at',
    ];
}
