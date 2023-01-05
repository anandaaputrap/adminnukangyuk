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
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();

            $table->string('nama_tukang');
            $table->string('keahlian_tukang');
            $table->string('tgl_mulai');
            $table->string('tgl_selesai');
            $table->string('nama_pelanggan');
            $table->string('total');
            $table->string('bukti_byr');
            $table->string('status');
            $table->bigInteger('id_pelanggan');
            $table->bigInteger('id_tukang');


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
        Schema::dropIfExists('pembayaran');
    }
};
