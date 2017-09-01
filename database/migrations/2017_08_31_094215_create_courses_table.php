<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('courses', function (Blueprint $table) {
        $table->increments('id');
        $table->string('course_nr');
        $table->integer('course_type_id');
        $table->integer('team_id');
        $table->string('location');
        $table->date('date_from');
        $table->date('date_to');
        $table->date('deadline');
        $table->string('link');
        $table->timestamps();

        $table->unique('course_nr');
    });


}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
{
    Schema::dropIfExists('courses');
}
}
