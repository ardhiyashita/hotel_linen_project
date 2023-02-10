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
        Schema::create('tb_linen', function (Blueprint $table) {
            $table->integer('id_linen', true);
            $table->integer('id_jabatan')->index('FK_tb_linen');
            $table->integer('id_template')->index('FK_tb_linen_template');
            $table->integer('id_supplier')->index('FK_tb_linen_supplier');
            $table->integer('id_hotel')->index('FK_tb_linen_hotel');
            $table->string('tag_id', 50);
            $table->string('linen_name', 50);
            $table->string('size', 50);
            $table->integer('price');
            $table->string('hotel_name', 50);
            $table->string('color', 50);
            $table->string('linen_code', 50);
            $table->string('linen_type', 50);
            $table->string('linen_category', 50);
            $table->string('template', 50);
            $table->string('supplier', 50);
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
        Schema::dropIfExists('tb_linen');
    }
};
