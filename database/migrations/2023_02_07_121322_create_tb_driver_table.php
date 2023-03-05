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
        Schema::create('tb_driver', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_jabatan')->default(3)->index('FK_tb_driver');
            $table->integer('id_laundry_plant')->index('FK_tb_driver_laundry_plant');
            $table->string('driver_id', 50);
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->string('gender', 50);
            $table->string('phone', 20);
            $table->string('laundry_plant', 50);
            $table->string('company', 50);
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
        Schema::dropIfExists('tb_driver');
    }
};
