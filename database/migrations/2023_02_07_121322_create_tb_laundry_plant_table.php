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
        Schema::create('tb_laundry_plant', function (Blueprint $table) {
            $table->integer('id_laundry_plant', true);
            $table->integer('id_jabatan')->default(3)->index('FK_tb_laundry_plant');
            $table->integer('id_linen_center')->index('FK_tb_laundry_plant_linen_center');
            $table->string('name', 50);
            $table->string('code', 50);
            $table->string('phone', 20);
            $table->string('email', 50);
            $table->string('linen_center', 50);
            $table->string('address', 50);
            $table->string('description', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_laundry_plant');
    }
};
