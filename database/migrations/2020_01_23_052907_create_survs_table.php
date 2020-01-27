<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('deptsur_id');
            $table->string('remarks');
            $table->timestamps();

            $table->foreign('deptsur_id')
            ->references('id')
            ->on('deptsurs')
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
        Schema::dropIfExists('survs');
    }
}
