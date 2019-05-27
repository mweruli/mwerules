<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fees', function (Blueprint $table) {
            $table->bigIncrements('fee_id');
            $table->bigInteger('academic_id')->unsigned();
            $table->bigInteger('level_id')->unsigned();
            $table->bigInteger('fee_type_id')->unsigned();
            $table->string('fee_heading')->nullable();
            $table->float('amount');
            
            $table->foreign('academic_id')->references('academic_id')->on('academics');
            $table->foreign('level_id')->references('id')->on('levels');
            $table->foreign('fee_type_id')->references('fee_type_id')->on('feetypes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fees');
    }
}
