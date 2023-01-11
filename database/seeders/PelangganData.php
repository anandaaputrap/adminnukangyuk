<?php

namespace Database\Seeders;

use App\Models\Pelanggan;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PelangganData extends Seeder
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
                'nama_pelanggan' => 'Kusnaidi',
                'telepon_pelanggan' => '08831466023',
                'alamat_pelanggan' => 'Sidoarjo',
                'username_pelanggan' => 'kusnaidi11',
                'password_pelanggan' => Hash::make('123456'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ];

        foreach ($tukang as $key => $value) {
            Pelanggan::create($value);
        }
    }
}
