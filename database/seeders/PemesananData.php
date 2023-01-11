<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Pemesanan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PemesananData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pesanan = [
            [
                'tgl_mulai' => Carbon::parse('2023-01-08'),
                'tgl_selesai' => Carbon::parse('2023-01-10'),
                'nama_pelanggan' => 'Kusnaidi',
                'nama_tukang' => 'Junaidi',
                'keahlian_tukang' => 'Cat',
                'id_pelanggan' => 1,
                'id_tukang' => 1,
                'status_pesan' => 'Terkonfirmasi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ];

        foreach ($pesanan as $key => $value) {
            Pemesanan::create($value);
        }
    }
}
