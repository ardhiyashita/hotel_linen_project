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
        Schema::create('tb_internal_transaction', function (Blueprint $table) {
            $table->integer('id_internal_transaction', true);
            $table->integer('id_jabatan')->default(3)->index('FK_tb_internal_transaction');
            $table->integer('id_packed')->index('FK_tb_internal_transaction_packed');
            $table->integer('id_laundry_plant')->index('FK_tb_internal_transaction_laundry_plant');
            $table->string('trans_code', 50);
            $table->date('trans_date');
            $table->string('delivery_type', 50);
            $table->integer('laundry_name');
            $table->integer('total_packing');
            $table->string('delivery_status', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_internal_transaction');
    }
};
