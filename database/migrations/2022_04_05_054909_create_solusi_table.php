<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolusiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solusi', function (Blueprint $table) {
            $table->id();
            $table->string('kode');
            $table->string('id_klasifikasi');
            $table->text('solusi');
            $table->timestamps();

            $table->foreign('id_klasifikasi')->references('kode')->on('klasifikasi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solusi');
    }
}
