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
        Schema::create('tb_user', function (Blueprint $table) {
            $table->integer('id_user', true);
            $table->string('username', 50);
            $table->string('password', 50);
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->integer('id_jabatan')->index('FK_tb_user_jabatan');
            $table->integer('id_laundry_plant')->index('FK_tb_user_laundry_plant');
            $table->string('linen_center', 50);
            $table->string('laundry_plant', 50);
            $table->string('email', 100);
            $table->integer('status_akun')->default(0)->comment('0 = Tdk Aktif, 1 = Aktif');
            $table->string('description', 50);
            $table->string('foto', 50)->default('nopic.png');
            $table->timestamp('time_create')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_user');
    }
};
