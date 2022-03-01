<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKuisPertamasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kuis_pertamas', function (Blueprint $table) {
            $table->id();
            $table->string('soal_1');
            $table->string('soal_2')->nullable();
            $table->string('soal_3')->nullable();
            $table->string('pertanyaan_soal');
            $table->string('jawaban_1');
            $table->string('jawaban_2')->nullable();
            $table->string('jawaban_3')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kuis_pertamas');
    }
}
