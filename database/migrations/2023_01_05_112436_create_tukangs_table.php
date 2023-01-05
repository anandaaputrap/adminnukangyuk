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
        Schema::create('tukang', function (Blueprint $table) {
            $table->id();

            $table->string('nama_tukang');
            $table->string('telepon_tukang', 15);
            $table->string('alamat_tukang');
            $table->string('username_tukang');
            $table->string('password_tukang');
            $table->string('keahlian_tukang');
            $table->string('tarif_tukang');
            $table->string('norek_tukang', 15);
            $table->string('status_tukang');

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
        Schema::dropIfExists('tukang');
    }
};
