<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentfeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentfees', function (Blueprint $table) {
            $table->bigIncrements('s_feeid');
            $table->bigInteger('student_id')->unsigned();
            $table->bigInteger('fee_id')->unsigned();
            $table->bigInteger('level_id')->unsigned();
            $table->float('amount');

            $table->foreign('student_id')->references('student_id')->on('students');
            $table->foreign('fee_id')->references('fee_id')->on('fees');
            $table->foreign('level_id')->references('id')->on('levels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('studentfees');
    }
}
