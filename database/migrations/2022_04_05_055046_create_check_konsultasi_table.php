<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckKonsultasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('check_konsultasi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_konsultasi');
            $table->unsignedBigInteger('id_gejala');
            $table->unsignedBigInteger('id_solusi');
            $table->timestamps();

            $table->foreign('id_konsultasi')->references('id')->on('konsultasi');
            $table->foreign('id_gejala')->references('id')->on('gejala');
            $table->foreign('id_solusi')->references('id')->on('solusi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('check_konsultasi');
    }
}
