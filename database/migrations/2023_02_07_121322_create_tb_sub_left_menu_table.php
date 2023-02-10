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
        Schema::create('tb_sub_left_menu', function (Blueprint $table) {
            $table->integer('id_sub_menu', true);
            $table->integer('id_menu')->nullable();
            $table->string('nama_menu', 60)->nullable();
            $table->string('link', 60)->nullable();
            $table->integer('urutan')->nullable();
            $table->string('icon', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_sub_left_menu');
    }
};
