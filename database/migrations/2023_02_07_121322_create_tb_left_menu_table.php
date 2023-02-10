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
        Schema::create('tb_left_menu', function (Blueprint $table) {
            $table->integer('id_menu', true);
            $table->string('nama_menu', 25)->nullable();
            $table->string('icon', 50)->nullable();
            $table->string('has_submenu', 1)->nullable();
            $table->string('link', 30)->nullable();
            $table->integer('urutan')->nullable();
            $table->integer('id_jabatan_akses')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_left_menu');
    }
};
