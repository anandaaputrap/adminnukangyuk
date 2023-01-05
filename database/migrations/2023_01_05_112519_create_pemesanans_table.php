<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanan', function (Blueprint $table) {
            $table->id();

            $table->string('tgl_mulai');
            $table->string('tgl_selesai');
            $table->string('nama_pelanggan');
            $table->string('nama_tukang');
            $table->string('keahlian_tukang');
            $table->bigInteger('id_pelanggan');
            $table->bigInteger('id_tukang');
            $table->string('status_pesan');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemesanan');
    }
};
