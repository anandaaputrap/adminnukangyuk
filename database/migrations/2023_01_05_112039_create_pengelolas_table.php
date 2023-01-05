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
        Schema::create('pengelola', function (Blueprint $table) {
            $table->id();

            $table->string('nama_pengelola');
            $table->string('email_pengelola');
            $table->string('telepon_pengelola', 15);
            $table->string('username_pengelola');
            $table->string('password_pengelola');
            $table->string('norek_pengelola', 15);


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
        Schema::dropIfExists('pengelola');
    }
};
