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
        Schema::table('tb_clean_linen', function (Blueprint $table) {
            $table->foreign(['id_linen'], 'FK_tb_clean_linen_to_linen')->references(['id_linen'])->on('tb_linen');
            $table->foreign(['id_jabatan'], 'FK_tb_clean_linen')->references(['id_jabatan'])->on('tb_jabatan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_clean_linen', function (Blueprint $table) {
            $table->dropForeign('FK_tb_clean_linen_to_linen');
            $table->dropForeign('FK_tb_clean_linen');
        });
    }
};
