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
        Schema::create('tb_hotel_transaction', function (Blueprint $table) {
            $table->integer('id_hotel_transaction', true);
            $table->integer('id_jabatan')->index('FK_tb_hotel_transaction');
            $table->integer('id_packed')->index('FK_tb_hotel_transaction_packed');
            $table->integer('id_clean_linen')->index('FK_tb_hotel_transaction_clean_linen');
            $table->string('trans_code', 50);
            $table->date('trans_date');
            $table->string('hotel_code', 50);
            $table->string('hotel_name', 50);
            $table->integer('clean');
            $table->integer('soil');
            $table->integer('stain');
            $table->integer('torn');
            $table->string('trans_status', 50);
            $table->string('delivery_status', 50);
            $table->integer('discard');
            $table->integer('treatment');
            $table->integer('request_linen');
            $table->string('driver', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_hotel_transaction');
    }
};
