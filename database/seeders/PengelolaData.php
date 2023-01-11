<?php

namespace Database\Seeders;

use App\Models\Pengelola;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PengelolaData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tukang = [
            [
                'nama_pengelola' => 'Jumanto',
                'email_pengelola' => 'jumanto77@gmail.com',
                'telepon_pengelola' => '08831424869',
                'username_pengelola' => 'jumantod',
                'password_pengelola' => Hash::make('123456'),
                'norek_pengelola' => '12345678',
                'level' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ];

        foreach ($tukang as $key => $value) {
            Pengelola::create($value);
        }
    }
}
