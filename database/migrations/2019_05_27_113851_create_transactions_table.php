<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('transact_id');
            $table->datetime('transact_date');
            $table->bigInteger('fee_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('student_id')->unsigned();
            $table->bigInteger('s_feeid')->unsigned();
            $table->float('paid');
            $table->string('remark')->nullable();
            $table->string('desription')->nullable();

            $table->foreign('fee_id')->references('fee_id')->on('fees');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('student_id')->references('student_id')->on('students');
            $table->foreign('s_feeid')->references('s_feeid')->on('studentfees');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
