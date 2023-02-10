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
        Schema::create('tb_register_history', function (Blueprint $table) {
            $table->integer('id_register_history', true);
            $table->integer('id_linen')->index('FK_tb_register_history_linen');
            $table->integer('id_jabatan')->default(3)->index('FK_tb_register_history');
            $table->string('register_date', 50);
            $table->string('template_code', 50);
            $table->string('template_name', 50);
            $table->string('linen_type', 50);
            $table->integer('total');
            $table->string('size', 20);
            $table->string('supplier', 50);
            $table->string('color', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_register_history');
    }
};
