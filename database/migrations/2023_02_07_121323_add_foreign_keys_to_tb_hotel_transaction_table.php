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
        Schema::table('tb_hotel_transaction', function (Blueprint $table) {
            $table->foreign(['id_clean_linen'], 'FK_tb_hotel_transaction_clean_linen')->references(['id_clean_linen'])->on('tb_clean_linen');
            $table->foreign(['id_jabatan'], 'FK_tb_hotel_transaction')->references(['id_jabatan'])->on('tb_jabatan');
            $table->foreign(['id_packed'], 'FK_tb_hotel_transaction_packed')->references(['id_packed'])->on('tb_packed');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_hotel_transaction', function (Blueprint $table) {
            $table->dropForeign('FK_tb_hotel_transaction_clean_linen');
            $table->dropForeign('FK_tb_hotel_transaction');
            $table->dropForeign('FK_tb_hotel_transaction_packed');
        });
    }
};
