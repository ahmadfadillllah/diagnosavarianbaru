<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckKonsultasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('check_konsultasis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_konsultasi');
            $table->unsignedBigInteger('id_gejala');
            $table->unsignedBigInteger('id_solusi');
            $table->timestamps();

            $table->foreign('id_konsultasi')->references('id')->on('konsultasis');
            $table->foreign('id_gejala')->references('id')->on('gejalas');
            $table->foreign('id_solusi')->references('id')->on('solusis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('check_konsultasis');
    }
}
