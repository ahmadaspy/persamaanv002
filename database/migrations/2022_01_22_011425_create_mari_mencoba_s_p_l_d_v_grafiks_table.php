<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMariMencobaSPLDVGrafiksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mari_mencoba_s_p_l_d_v_grafiks', function (Blueprint $table) {
            $table->id();
            $table->string('soal_1');
            $table->string('soal_2');
            $table->string('x1_1');
            $table->string('x1_2');
            $table->string('y1_1');
            $table->string('y1_2');
            $table->string('x2_1');
            $table->string('x2_2');
            $table->string('y2_1');
            $table->string('y2_2');
            $table->string('TP_1');
            $table->string('TP_2');
            $table->text('soal_1_x');
            $table->text('soal_1_y');
            $table->text('soal_2_x');
            $table->text('soal_2_y');
            $table->string('link_geogebra');
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
        Schema::dropIfExists('mari_mencoba_s_p_l_d_v_grafiks');
    }
}