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
        $plg = [
            [
                'nama_pelanggan' => 'Slamet Rizki',
                'telepon_pelanggan' => '08381466023',
                'alamat_pelanggan' => 'Perak',
                'username_pelanggan' => 'slametriz',
                'password_pelanggan' => Hash::make('123456'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'nama_pelanggan' => 'Michael',
                'telepon_pelanggan' => '08387756023',
                'alamat_pelanggan' => 'Rungkut',
                'username_pelanggan' => 'mchzzz',
                'password_pelanggan' => Hash::make('123456'),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ];

        foreach ($plg as $key => $value) {
            Pelanggan::create($value);
        }
    }
}
