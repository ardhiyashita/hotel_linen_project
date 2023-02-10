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
        Schema::table('tb_linen', function (Blueprint $table) {
            $table->foreign(['id_hotel'], 'FK_tb_linen_hotel')->references(['id_hotel'])->on('tb_hotel');
            $table->foreign(['id_template'], 'FK_tb_linen_template')->references(['id_template'])->on('tb_template');
            $table->foreign(['id_jabatan'], 'FK_tb_linen')->references(['id_jabatan'])->on('tb_jabatan');
            $table->foreign(['id_supplier'], 'FK_tb_linen_supplier')->references(['id_supplier'])->on('tb_supplier');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_linen', function (Blueprint $table) {
            $table->dropForeign('FK_tb_linen_hotel');
            $table->dropForeign('FK_tb_linen_template');
            $table->dropForeign('FK_tb_linen');
            $table->dropForeign('FK_tb_linen_supplier');
        });
    }
};
