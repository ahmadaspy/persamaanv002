<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMariMencobaSpltvKehidupansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mari_mencoba_spltv_kehidupans', function (Blueprint $table) {
            $table->id();
            $table->text('soal_1');
            $table->text('pertanyaan_soal');
            $table->string('placeholder_1');
            $table->string('placeholder_2');
            $table->string('placeholder_3');
            $table->string('jawaban_1');
            $table->string('jawaban_2')->nullable();
            $table->string('jawaban_3')->nullable();
            $table->text('penjelasan_1')->nullable();
            $table->text('penjelasan_2')->nullable();
            $table->text('penjelasan_3')->nullable();
            $table->text('penjelasan_4')->nullable();
            $table->text('penjelasan_5')->nullable();
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
        Schema::dropIfExists('mari_mencoba_spltv_kehidupans');
    }
}
