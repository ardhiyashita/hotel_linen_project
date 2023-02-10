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
        Schema::create('tb_linen_type', function (Blueprint $table) {
            $table->integer('id_linen_type', true);
            $table->integer('id_jabatan')->index('FK_tb_linen_type');
            $table->integer('id_linen_category')->index('FK_tb_linen_type_category');
            $table->string('linen_code', 100);
            $table->string('linen_type', 50);
            $table->string('linen_category', 50);
            $table->char('size', 10);
            $table->string('color', 50);
            $table->integer('max_cycle');
            $table->integer('standar_packing');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_linen_type');
    }
};
