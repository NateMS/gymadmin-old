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
        $table->integer('course_type_id')->unsigned();
        $table->integer('team_id')->unsigned();
        $table->string('location');
        $table->date('date_from');
        $table->date('date_to');
        $table->date('deadline');
        $table->string('link');
        $table->timestamps();

        $table->foreign('team_id')
            ->references('id')
            ->on('teams')
            ->onDelete('cascade');

        $table->foreign('course_type_id')
            ->references('id')
            ->on('course_types')
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
    Schema::dropIfExists('courses');
}
}
