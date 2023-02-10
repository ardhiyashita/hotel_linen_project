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
        Schema::create('tb_supplier', function (Blueprint $table) {
            $table->integer('id_supplier', true);
            $table->integer('id_jabatan')->index('FK_tb_supplier_jabatan');
            $table->string('code_supplier', 100);
            $table->string('name_supplier', 50);
            $table->string('manufacture', 50);
            $table->string('phone', 15);
            $table->string('email', 100);
            $table->string('address', 50);
            $table->string('note', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_supplier');
    }
};
