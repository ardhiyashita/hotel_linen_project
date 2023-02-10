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
        Schema::table('tb_internal_transaction', function (Blueprint $table) {
            $table->foreign(['id_laundry_plant'], 'FK_tb_internal_transaction_laundry_plant')->references(['id_laundry_plant'])->on('tb_laundry_plant');
            $table->foreign(['id_jabatan'], 'FK_tb_internal_transaction')->references(['id_jabatan'])->on('tb_jabatan');
            $table->foreign(['id_packed'], 'FK_tb_internal_transaction_packed')->references(['id_packed'])->on('tb_packed');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_internal_transaction', function (Blueprint $table) {
            $table->dropForeign('FK_tb_internal_transaction_laundry_plant');
            $table->dropForeign('FK_tb_internal_transaction');
            $table->dropForeign('FK_tb_internal_transaction_packed');
        });
    }
};
