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
        Schema::create('tb_clean_linen', function (Blueprint $table) {
            $table->integer('id_clean_linen', true);
            $table->integer('id_jabatan')->index('FK_tb_clean_linen');
            $table->integer('id_linen')->index('FK_tb_clean_linen_to_linen');
            $table->string('hotel_name', 100);
            $table->string('place', 100);
            $table->string('linen_code', 100);
            $table->string('linen_name', 100);
            $table->char('size', 10);
            $table->integer('total');
            $table->integer('total_clean');
            $table->integer('total_dirty');
            $table->string('linen_status', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_clean_linen');
    }
};
