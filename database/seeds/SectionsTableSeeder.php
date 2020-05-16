<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sections')->insert([

        	[
                'course_id' => 1,
        		'name' => 'BSIT - Section 1',
        		'max_num_of_students' => '30',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
                'course_id' => 1,
        		'name' => 'BSIT - Section 2',
        		'max_num_of_students' => '30',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	]



        ]);
        	
    }
}
