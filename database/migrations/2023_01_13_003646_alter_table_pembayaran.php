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
        // Schema::table('pembayaran', function (Blueprint $table) {
        //     $table->dropColumn('nama_pelanggan');
        // });
        Schema::table('pembayaran', function (Blueprint $table) {
            $table->renameColumn('nama_tukang', 'username_tukang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pembayaran', function (Blueprint $table) {
            //
        });
    }
};