<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchedulesTableSeeder extends Seeder
{
	protected $fillable=['course_id', 'section_id', 'subject_id', 'type_id', 'room_id', 'instructor_id', 'meeting_time_id'];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    }
}
