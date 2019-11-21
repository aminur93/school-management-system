<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->increments('class_id');
            $table->integer('academic_id')->unsigned();
            $table->integer('level_id')->unsigned();
            $table->integer('shift_id')->unsigned();
            $table->integer('time_id')->unsigned();
            $table->integer('group_id')->unsigned();
            $table->integer('batch_id')->unsigned();
            $table->date('start_date');
            $table->date('end_date');
            $table->boolean('active');
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
        Schema::dropIfExists('classes');
    }
}
