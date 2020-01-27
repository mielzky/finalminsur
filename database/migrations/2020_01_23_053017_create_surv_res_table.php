<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurvResTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surv_res', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('surv_id');
            $table->unsignedBigInteger('survey_id');
            $table->unsignedBigInteger('answer_id');
            $table->timestamps();

            $table->foreign('surv_id', 'survey_id', 'answer_id')
            ->references('id')
            ->on('survs', 'surveys', 'answers')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surv_res');
    }
}
