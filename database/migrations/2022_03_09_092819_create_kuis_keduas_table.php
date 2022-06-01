<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKuisKeduasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kuis_keduas', function (Blueprint $table) {
            $table->id();
            $table->text('soal_1');
            $table->string('pertanyaan_soal');
            $table->string('jawaban_1');
            $table->string('placeholder_jawaban_1');
            $table->string('jawaban_2')->nullable();
            $table->string('placeholder_jawaban_2')->nullable();
            $table->string('jawaban_3')->nullable();
            $table->string('placeholder_jawaban_3')->nullable();
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
        Schema::dropIfExists('kuis_keduas');
    }
}
