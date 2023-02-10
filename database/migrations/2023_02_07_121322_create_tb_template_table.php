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
        Schema::create('tb_template', function (Blueprint $table) {
            $table->integer('id_template', true);
            $table->integer('id_jabatan')->default(3)->index('FK_tb_template');
            $table->integer('id_linen_type')->index('FK_tb_template_linen_type');
            $table->string('code', 50);
            $table->string('template_name', 50);
            $table->string('linen_code', 50);
            $table->string('linen_type', 50);
            $table->string('linen_place', 50);
            $table->string('size', 50);
            $table->string('color', 50);
            $table->string('supplier', 50);
            $table->integer('max_cycle');
            $table->string('sew_by', 50);
            $table->string('ownership', 50);
            $table->string('linen_condition', 50);
            $table->string('quarter', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_template');
    }
};
