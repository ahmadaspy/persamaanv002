<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMariMencobaSpldvElminasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mari_mencoba_spldv_elminasis', function (Blueprint $table) {
            $table->id();
            $table->string('soal_1');
            $table->string('soal_2');
            $table->string('x');
            $table->string('y');
            $table->text('penjelasan_1')->nullable();
            $table->text('penjelasan_2')->nullable();
            $table->text('penjelasan_3')->nullable();
            $table->text('penjelasan_4')->nullable();
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
        Schema::dropIfExists('mari_mencoba_spldv_elminasis');
    }
}
