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
        Schema::create('tb_packed', function (Blueprint $table) {
            $table->integer('id_packed', true);
            $table->integer('id_jabatan')->index('FK_tb_packed');
            $table->integer('id_driver')->index('FK_tb_packed_driver');
            $table->integer('id_hotel')->index('FK_tb_packed_hotel');
            $table->string('packing_code', 100);
            $table->string('packing_date', 50);
            $table->string('packed_by', 100);
            $table->string('hotel_code', 100);
            $table->string('hotel_name', 100);
            $table->integer('total');
            $table->string('status', 50);
            $table->string('driver', 20);
            $table->string('manual_delivery_out', 20);
            $table->string('manual_to_hotel', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_packed');
    }
};
