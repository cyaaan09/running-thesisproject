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
        		'subject_details_id' => '6',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()

        	],

        	[

        		'course_id' => '1',
        		'section_id' => '1',
        		'instructor_id' => '3',
        		'subject_details_id' => '8',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()

        	],

        	[

        		'course_id' => '1',
        		'section_id' => '1',
        		'instructor_id' => '3',
        		'subject_details_id' => '10',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()

        	],

        	[

        		'course_id' => '1',
        		'section_id' => '1',
        		'instructor_id' => '4',
        		'subject_details_id' => '11',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()

        	],

        	[

        		'course_id' => '1',
        		'section_id' => '1',
        		'instructor_id' => '4',
        		'subject_details_id' => '12',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()

        	],

        	


        ]);
    }
}
