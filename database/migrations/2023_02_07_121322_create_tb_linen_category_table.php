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
        Schema::create('tb_linen_category', function (Blueprint $table) {
            $table->integer('id_linen_category', true);
            $table->integer('id_jabatan')->index('FK_tb_linen_code_jabatan');
            $table->string('linen_code', 50);
            $table->string('linen_name', 100)->default(' ');
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
        Schema::dropIfExists('tb_linen_category');
    }
};
