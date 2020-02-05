<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAthletesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('athletes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_place')->nullable();
            $table->date('data')->nullable();
            $table->integer('id_tatami')->nullable();
            $table->integer('id_judge')->nullable();
            $table->integer('id_tour')->nullable();
            $table->integer('id_kategorie')->nullable();
            $table->string('vid_quest')->nullable();
            $table->string('name')->nullable();
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
        Schema::dropIfExists('athletes');
    }
}
