<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCourseIdSectionIdSubjectIdTypeIdInstructorIdMeetingTimeIdToSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('schedules', function (Blueprint $table) {
            $table->integer('course_id')->nullable();

            $table->integer('section_id')->nullable();

            $table->integer('subject_id')->nullable();

            $table->integer('type_id')->nullable();          

            $table->integer('room_id')->nullable();
            // $table->foreign('room_id')->references('id')->on('rooms');

            $table->integer('instructor_id')->nullable();

            $table->integer('meeting_time_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('schedules', function (Blueprint $table) {
            //
        });
    }
}
