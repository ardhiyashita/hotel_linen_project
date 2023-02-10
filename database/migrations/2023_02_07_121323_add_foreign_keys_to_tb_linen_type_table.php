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
        Schema::table('tb_linen_type', function (Blueprint $table) {
            $table->foreign(['id_linen_category'], 'FK_tb_linen_type_category')->references(['id_linen_category'])->on('tb_linen_category');
            $table->foreign(['id_jabatan'], 'FK_tb_linen_type')->references(['id_jabatan'])->on('tb_jabatan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_linen_type', function (Blueprint $table) {
            $table->dropForeign('FK_tb_linen_type_category');
            $table->dropForeign('FK_tb_linen_type');
        });
    }
};
