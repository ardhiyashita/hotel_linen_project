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
        Schema::table('tb_packed', function (Blueprint $table) {
            $table->foreign(['id_driver'], 'FK_tb_packed_driver')->references(['id_driver'])->on('tb_driver');
            $table->foreign(['id_jabatan'], 'FK_tb_packed')->references(['id_jabatan'])->on('tb_jabatan');
            $table->foreign(['id_hotel'], 'FK_tb_packed_hotel')->references(['id_hotel'])->on('tb_hotel');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_packed', function (Blueprint $table) {
            $table->dropForeign('FK_tb_packed_driver');
            $table->dropForeign('FK_tb_packed');
            $table->dropForeign('FK_tb_packed_hotel');
        });
    }
};
