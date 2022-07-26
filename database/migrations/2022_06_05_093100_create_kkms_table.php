<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKkmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kkms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kode_kelas_id');
            $table->foreign('kode_kelas_id')->references('id')->on('kode_kelas');
            $table->string('kuis_mengenal_kkm');
            $table->string('kuis_1_kkm');
            $table->string('kuis_2_kkm');
            $table->string('evaluasi_kkm');
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
        Schema::dropIfExists('kkms');
    }
}
