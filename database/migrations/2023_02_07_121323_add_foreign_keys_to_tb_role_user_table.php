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
        Schema::table('tb_role_user', function (Blueprint $table) {
            $table->foreign(['id_jabatan'], 'FK_tb_role_user')->references(['id_jabatan'])->on('tb_jabatan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_role_user', function (Blueprint $table) {
            $table->dropForeign('FK_tb_role_user');
        });
    }
};
