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
        Schema::create('tb_hotel', function (Blueprint $table) {
            $table->integer('id_hotel', true);
            $table->integer('id_jabatan')->default(3)->index('id_jabatan');
            $table->integer('id_laundry_plant')->index('FK_tb_hotel_laundry_plant');
            $table->string('hotel_code', 50);
            $table->string('hotel_name', 50);
            $table->string('laundry_plant', 50);
            $table->string('contact_name', 50);
            $table->string('phone', 20);
            $table->string('email', 50);
            $table->string('address', 50);
            $table->string('note', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_hotel');
    }
};
