<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Course_SectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('course_sections')->insert([

        	[
        		'course_id' => '1',
				'section_id' => '1',
				'created_at' => \Carbon\Carbon::now(),
				'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'course_id' => '1',
				'section_id' => '2',
				'created_at' => \Carbon\Carbon::now(),
				'updated_at' => \Carbon\Carbon::now()
        	]

        ]);
    }
}
