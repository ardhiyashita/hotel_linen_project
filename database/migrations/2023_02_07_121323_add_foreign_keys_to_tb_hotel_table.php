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
        Schema::table('tb_hotel', function (Blueprint $table) {
            $table->foreign(['id_laundry_plant'], 'FK_tb_hotel_laundry_plant')->references(['id_laundry_plant'])->on('tb_laundry_plant');
            $table->foreign(['id_jabatan'], 'FK_tb_hotel')->references(['id_jabatan'])->on('tb_jabatan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_hotel', function (Blueprint $table) {
            $table->dropForeign('FK_tb_hotel_laundry_plant');
            $table->dropForeign('FK_tb_hotel');
        });
    }
};
