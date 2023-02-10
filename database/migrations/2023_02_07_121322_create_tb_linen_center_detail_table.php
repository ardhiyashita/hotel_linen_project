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
        Schema::create('tb_linen_center_detail', function (Blueprint $table) {
            $table->integer('id_linen_center_detail', true);
            $table->integer('id_jabatan')->default(3)->index('FK_tb_linen_center_detail');
            $table->string('code', 50);
            $table->string('name', 50);
            $table->string('address', 50);
            $table->integer('phone');
            $table->string('email', 50);
            $table->string('description', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_linen_center_detail');
    }
};
