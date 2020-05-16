// meeting times


<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Meeting_TimesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('meeting_times')->insert([
        	[
        		'day' => 'Mon',
        		'start' => '8:00 AM',
        		'end' => '9:00 AM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Mon',
        		'start' => '9:00 AM',
        		'end' => '10:00 AM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Mon',
        		'start' => '10:00 AM',
        		'end' => '12:00 PM',
        		'duration' => '2',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Mon',
        		'start' => '12:00 PM',
        		'end' => '1:00 PM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Mon',
        		'start' => '1:00 PM',
        		'end' => '2:00 PM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Mon',
        		'start' => '2:00 PM',
        		'end' => '4:00 PM',
        		'duration' => '2',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Mon',
        		'start' => '4:00 PM',
        		'end' => '5:00 PM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Mon',
        		'start' => '5:30 PM',
        		'end' => '6:30 PM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Tue',
        		'start' => '7:00 AM',
        		'end' => '8:00 AM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Tue',
        		'start' => '8:00 AM',
        		'end' => '9:00 AM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Tue',
        		'start' => '9:00 AM',
        		'end' => '10:00 AM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Tue',
        		'start' => '10:00 AM',
        		'end' => '11:00 AM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Tue',
        		'start' => '11:00 AM',
        		'end' => '12:00 PM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Tue',
        		'start' => '2:00 PM',
        		'end' => '4:00 PM',
        		'duration' => '2',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Tue',
        		'start' => '4:00 PM',
        		'end' => '5:00 PM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Wed',
        		'start' => '7:00 AM',
        		'end' => '8:00 AM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Wed',
        		'start' => '9:00 AM',
        		'end' => '10:00 AM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Wed',
        		'start' => '10:00 AM',
        		'end' => '11:00 AM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Wed',
        		'start' => '11:00 AM',
        		'end' => '12:00 PM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Wed',
        		'start' => '1:00 PM',
        		'end' => '3:00 PM',
        		'duration' => '2',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Wed',
        		'start' => '3:00 PM',
        		'end' => '4:00 PM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Wed',
        		'start' => '4:00 PM',
        		'end' => '5:30 PM',
        		'duration' => '1.5',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Thu',
        		'start' => '7:00 AM',
        		'end' => '8:00 AM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Thu',
        		'start' => '8:00 AM',
        		'end' => '9:00 AM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Thu',
        		'start' => '9:00 AM',
        		'end' => '10:00 AM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Thu',
        		'start' => '10:00 AM',
        		'end' => '11:00 AM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Thu',
        		'start' => '11:00 AM',
        		'end' => '12:00 PM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Thu',
        		'start' => '2:00 PM',
        		'end' => '3:00 PM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Thu',
        		'start' => '3:00 PM',
        		'end' => '4:00 PM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Thu',
        		'start' => '4:00 PM',
        		'end' => '5:30 PM',
        		'duration' => '1.5',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Fri',
        		'start' => '7:30 AM',
        		'end' => '9:00 AM',
        		'duration' => '1.5',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Fri',
        		'start' => '9:00 AM',
        		'end' => '10:00 AM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Fri',
        		'start' => '10:00 AM',
        		'end' => '11:00 AM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Fri',
        		'start' => '11:00 AM',
        		'end' => '12:00 PM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Fri',
        		'start' => '12:00 PM',
        		'end' => '1:00 PM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Fri',
        		'start' => '2:00 PM',
        		'end' => '3:00 PM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Fri',
        		'start' => '3:00 PM',
        		'end' => '4:00 PM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Fri',
        		'start' => '4:00 PM',
        		'end' => '5:00 PM',
        		'duration' => '1',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	
        	
        ]);
    }
}



//subjects

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->insert([
            [
                'name' => 'Math 101',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'name' => 'Science 101',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'name' => 'Rizal',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'name' => 'Philosohy',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'name' => 'Discrete Math',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'name' => 'Algorithm 101',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'name' => 'Microeconomics',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'name' => 'PE 1',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'name' => 'Programming 101',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'name' => 'Physics',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            
        ]);

    }
}



//subject details

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Subject_DetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subject_details')->insert([
            [
                'id'        => 1,
                'subject_id' => 1,
                'type_id' => 2,
                'duration' => 1.5,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'id'        => 3,
                'subject_id' => 1,
                'type_id' => 3,
                'duration' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'id'        => 4,
                'subject_id' => 2,
                'type_id' => 3,
                'duration' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'id'        => 6,
                'subject_id' => 3,
                'type_id' => 3,
                'duration' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'id'        => 8,
                'subject_id' => 4,
                'type_id' => 3,
                'duration' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'id'        => 10,
                'subject_id' => 5,
                'type_id' => 3,
                'duration' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'id'        => 11,
                'subject_id' => 6,
                'type_id' => 3,
                'duration' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'id'        => 12,
                'subject_id' => 7,
                'type_id' => 3,
                'duration' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'id'        => 13,
                'subject_id' => 8,
                'type_id' => 3,
                'duration' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'id'        => 14,
                'subject_id' => 8,
                'type_id' => 4,
                'duration' => 2,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'id'        => 15,
                'subject_id' => 9,
                'type_id' => 3,
                'duration' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'id'        => 16,
                'subject_id' => 9,
                'type_id' => 2,
                'duration' => 2,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'id'        => 17,
                'subject_id' => 10,
                'type_id' => 3,
                'duration' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'id'        => 18,
                'subject_id' => 10,
                'type_id' => 3,
                'duration' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'id'        => 19,
                'subject_id' => 6,
                'type_id' => 3,
                'duration' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            
        ]);

    }
}




//instructor subjects

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Instructor_SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('instructor_subjects')->insert([

            [

                'course_id' => '1',
                'section_id' => '1',
                'instructor_id' => '1',
                'subject_details_id' => '1',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()

            ],

            [

                'course_id' => '1',
                'section_id' => '1',
                'instructor_id' => '1',
                'subject_details_id' => '3',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()

            ],

            [

                'course_id' => '1',
                'section_id' => '1',
                'instructor_id' => '1',
                'subject_details_id' => '3',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()

            ],

            [

                'course_id' => '1',
                'section_id' => '1',
                'instructor_id' => '2',
                'subject_details_id' => '4',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()

            ],

            [

                'course_id' => '1',
                'section_id' => '1',
                'instructor_id' => '2',
                'subject_details_id' => '4',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()

            ],

            [

                'course_id' => '1',
                'section_id' => '1',
                'instructor_id' => '3',
                'subject_details_id' => '6',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()

            ],

            [

                'course_id' => '1',
                'section_id' => '1',
                'instructor_id' => '3',
                'subject_details_id' => '6',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()

            ],

            [

                'course_id' => '1',
                'section_id' => '1',
                'instructor_id' => '4',
                'subject_details_id' => '8',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()

            ],

            [

                'course_id' => '1',
                'section_id' => '1',
                'instructor_id' => '4',
                'subject_details_id' => '8',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()

            ],

            [

                'course_id' => '1',
                'section_id' => '1',
                'instructor_id' => '5',
                'subject_details_id' => '10',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()

            ],

            [

                'course_id' => '1',
                'section_id' => '1',
                'instructor_id' => '5',
                'subject_details_id' => '11',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()

            ],

            [

                'course_id' => '1',
                'section_id' => '1',
                'instructor_id' => '6',
                'subject_details_id' => '12',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()

            ],

            [

                'course_id' => '1',
                'section_id' => '1',
                'instructor_id' => '7',
                'subject_details_id' => '13',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()

            ],

            [

                'course_id' => '1',
                'section_id' => '1',
                'instructor_id' => '7',
                'subject_details_id' => '14',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()

            ],

            [

                'course_id' => '1',
                'section_id' => '1',
                'instructor_id' => '8',
                'subject_details_id' => '15',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()

            ],

            [

                'course_id' => '1',
                'section_id' => '1',
                'instructor_id' => '8',
                'subject_details_id' => '16',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()

            ],

            [

                'course_id' => '1',
                'section_id' => '1',
                'instructor_id' => '9',
                'subject_details_id' => '17',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()

            ],

            [

                'course_id' => '1',
                'section_id' => '1',
                'instructor_id' => '9',
                'subject_details_id' => '18',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()

            ],

            [

                'course_id' => '1',
                'section_id' => '1',
                'instructor_id' => '5',
                'subject_details_id' => '11',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()

            ],

            [

                'course_id' => '1',
                'section_id' => '2',
                'instructor_id' => '10',
                'subject_details_id' => '1',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()

            ],

            [

                'course_id' => '1',
                'section_id' => '2',
                'instructor_id' => '10',
                'subject_details_id' => '3',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()

            ],

            [

                'course_id' => '1',
                'section_id' => '2',
                'instructor_id' => '10',
                'subject_details_id' => '3',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()

            ],

            [

                'course_id' => '1',
                'section_id' => '2',
                'instructor_id' => '11',
                'subject_details_id' => '4',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()

            ],

            [

                'course_id' => '1',
                'section_id' => '2',
                'instructor_id' => '11',
                'subject_details_id' => '4',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()

            ],

            [

                'course_id' => '1',
                'section_id' => '2',
                'instructor_id' => '12',
                'subject_details_id' => '6',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()

            ],

            [

                'course_id' => '1',
                'section_id' => '2',
                'instructor_id' => '12',
                'subject_details_id' => '6',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()

            ],

            [

                'course_id' => '1',
                'section_id' => '2',
                'instructor_id' => '13',
                'subject_details_id' => '8',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()

            ],

            [

                'course_id' => '1',
                'section_id' => '2',
                'instructor_id' => '13',
                'subject_details_id' => '8',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()

            ],

            [

                'course_id' => '1',
                'section_id' => '2',
                'instructor_id' => '14',
                'subject_details_id' => '10',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()

            ],

            [

                'course_id' => '1',
                'section_id' => '2',
                'instructor_id' => '14',
                'subject_details_id' => '11',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()

            ],

            [

                'course_id' => '1',
                'section_id' => '2',
                'instructor_id' => '15',
                'subject_details_id' => '12',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()

            ],

            [

                'course_id' => '1',
                'section_id' => '2',
                'instructor_id' => '16',
                'subject_details_id' => '13',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()

            ],

            [

                'course_id' => '1',
                'section_id' => '2',
                'instructor_id' => '16',
                'subject_details_id' => '14',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()

            ],

            [

                'course_id' => '1',
                'section_id' => '2',
                'instructor_id' => '17',
                'subject_details_id' => '15',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()

            ],

            [

                'course_id' => '1',
                'section_id' => '1',
                'instructor_id' => '17',
                'subject_details_id' => '16',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()

            ],

            [

                'course_id' => '1',
                'section_id' => '2',
                'instructor_id' => '18',
                'subject_details_id' => '17',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()

            ],

            [

                'course_id' => '1',
                'section_id' => '2',
                'instructor_id' => '18',
                'subject_details_id' => '18',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()

            ],

            [

                'course_id' => '1',
                'section_id' => '2',
                'instructor_id' => '14',
                'subject_details_id' => '11',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()

            ]


        ]);
    }
}



//rooms


<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
            [
                'seating_capacity' => 0,
                'type_id' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'seating_capacity' => 25,
                'type_id' => 2,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'seating_capacity' => 45,
                'type_id' => 2,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'seating_capacity' => 35,
                'type_id' => 3,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'seating_capacity' => 50,
                'type_id' => 3,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'seating_capacity' => 50,
                'type_id' => 4,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'seating_capacity' => 50,
                'type_id' => 4,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'seating_capacity' => 50,
                'type_id' => 2,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'seating_capacity' => 50,
                'type_id' => 3,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'seating_capacity' => 50,
                'type_id' => 2,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'seating_capacity' => 50,
                'type_id' => 3,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'seating_capacity' => 50,
                'type_id' => 3,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'seating_capacity' => 50,
                'type_id' => 3,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'seating_capacity' => 50,
                'type_id' => 3,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'seating_capacity' => 50,
                'type_id' => 3,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'seating_capacity' => 50,
                'type_id' => 3,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'seating_capacity' => 50,
                'type_id' => 3,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'seating_capacity' => 50,
                'type_id' => 3,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'seating_capacity' => 50,
                'type_id' => 3,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'seating_capacity' => 50,
                'type_id' => 3,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'seating_capacity' => 50,
                'type_id' => 2,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            // [
            //  'seating_capacity' => 50,
            //  'type_id' => 2,
         //        'created_at' => \Carbon\Carbon::now(),
         //        'updated_at' => \Carbon\Carbon::now()
            // ],

            // [
            //  'seating_capacity' => 50,
            //  'type_id' => 2,
         //        'created_at' => \Carbon\Carbon::now(),
         //        'updated_at' => \Carbon\Carbon::now()
            // ],

            // [
            //  'seating_capacity' => 50,
            //  'type_id' => 2,
         //        'created_at' => \Carbon\Carbon::now(),
         //        'updated_at' => \Carbon\Carbon::now()
            // ],

            // [
            //  'seating_capacity' => 50,
            //  'type_id' => 3,
         //        'created_at' => \Carbon\Carbon::now(),
         //        'updated_at' => \Carbon\Carbon::now()
            // ],

            // [
            //  'seating_capacity' => 50,
            //  'type_id' => 3,
         //        'created_at' => \Carbon\Carbon::now(),
         //        'updated_at' => \Carbon\Carbon::now()
            // ],

            // [
            //  'seating_capacity' => 50,
            //  'type_id' => 3,
         //        'created_at' => \Carbon\Carbon::now(),
         //        'updated_at' => \Carbon\Carbon::now()
            // ],

            // [
            //  'seating_capacity' => 50,
            //  'type_id' => 2,
         //        'created_at' => \Carbon\Carbon::now(),
         //        'updated_at' => \Carbon\Carbon::now()
            // ],

            // [
            //  'seating_capacity' => 50,
            //  'type_id' => 2,
         //        'created_at' => \Carbon\Carbon::now(),
         //        'updated_at' => \Carbon\Carbon::now()
            // ],
        ]);
    }
}





// distance




<?php

use Illuminate\Database\Seeder;
use App\Room;

class DistancesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rooms = Room::all();
        foreach($rooms as $roomA) {
            foreach($rooms as $roomB) {
                if($roomA->id == $roomB->id) {
                    // do nothing
                } else {
                    DB::table('distances')->insert([
                        [
                            'from_room_id' => $roomA->id,
                            'to_room_id' => $roomB->id,
                            'distance' => mt_rand(1,20),
                            'created_at' => \Carbon\Carbon::now(),
                            'updated_at' => \Carbon\Carbon::now()
                        ]
                    ]);                 
                }
            }
        }
    }
}
