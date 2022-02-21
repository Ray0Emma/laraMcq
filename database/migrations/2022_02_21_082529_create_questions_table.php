<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // if a particular primary key ID value in the CUSTOMERS table is deleted, this action shall be prevented (this is the "restrict" part)

        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string('lib_question');
            $table->unsignedBigInteger('formulaire_id');
            $table->foreign('formulaire_id')->references('id')->on('formulaires')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('questions');
    }
}
