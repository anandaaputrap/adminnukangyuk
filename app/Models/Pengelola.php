<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;
class Pengelola extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = "pengelola";
    // protected $guarded = ['id'];
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_pengelola',
        'email_pengelola',
        'telepon_pengelola',
        'username_pengelola',
        'password_pengelola',
        'norek_pengelola',
        'level',
        'created_at',
        'updated_at',
    ];
}
