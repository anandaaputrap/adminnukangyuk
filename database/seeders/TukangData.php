<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Pengelola;
use App\Models\Tukang;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TukangData extends Seeder
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
                'nama_tukang' => 'Junaidi',
                'telepon_tukang' => '08831428806',
                'alamat_tukang' => 'Surabaya',
                'username_tukang' => 'junaidisehatselalu',
                'password_tukang' => Hash::make('123456'),
                'keahlian_tukang' => 'Cat',
                'tarif_tukang' => '100.000',
                'norek_tukang' => '12345678',
                'status_tukang' => 'aktif',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ];

        foreach ($tukang as $key => $value) {
            Tukang::create($value);
        }
    }
}
