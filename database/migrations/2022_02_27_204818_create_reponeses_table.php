<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReponesesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reponeses', function (Blueprint $table) {
            $table->id();
            $table->string('lib_reponse');
            $table->unsignedBigInteger('question_id');
            $table->foreign('question')->references('id')->on('questions')->onDelete('restrict')->onUpdate('restrict');
            $table->boolean('correct');
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
        Schema::dropIfExists('reponeses');
    }
}
