<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('points', function (Blueprint $table) {
            $table->increments('id');
            $table->string('student_code');
            $table->string('subject_code');
            $table->float('L1', 2,1)->nullable();
            $table->float('L2', 2,1)->nullable();
            $table->foreign('student_code')->references('code')->on('students');
            $table->foreign('subject_code')->references('code')->on('subjects');
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
        Schema::dropIfExists('point');
    }
}
