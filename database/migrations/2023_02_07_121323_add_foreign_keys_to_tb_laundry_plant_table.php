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
        Schema::table('tb_laundry_plant', function (Blueprint $table) {
            $table->foreign(['id_linen_center'], 'FK_tb_laundry_plant_linen_center')->references(['id_linen_center_detail'])->on('tb_linen_center_detail');
            $table->foreign(['id_jabatan'], 'FK_tb_laundry_plant')->references(['id_jabatan'])->on('tb_jabatan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_laundry_plant', function (Blueprint $table) {
            $table->dropForeign('FK_tb_laundry_plant_linen_center');
            $table->dropForeign('FK_tb_laundry_plant');
        });
    }
};
