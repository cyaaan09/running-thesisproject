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
        		'id' 		=> 1,
        		'subject_id' => 1,
        		'type_id' => 3,
        		'duration' => 1.5,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'id' 		=> 3,
        		'subject_id' => 2,
        		'type_id' => 3,
        		'duration' => 1.5,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'id' 		=> 4,
        		'subject_id' => 3,
        		'type_id' => 3,
        		'duration' => 1.5,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'id' 		=> 6,
        		'subject_id' => 4,
        		'type_id' => 3,
        		'duration' => 1.5,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'id' 		=> 8,
        		'subject_id' => 4,
        		'type_id' => 2,
        		'duration' => 2,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'id' 		=> 10,
        		'subject_id' => 5,
        		'type_id' => 3,
        		'duration' => 1.5,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'id' 		=> 11,
        		'subject_id' => 6,
        		'type_id' => 3,
        		'duration' => 1.5,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'id' 		=> 12,
        		'subject_id' => 7,
        		'type_id' => 4,
        		'duration' => 2,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

            [
                'id'        => 13,
                'subject_id' => 8,
                'type_id' => 4,
                'duration' => 3,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],


        	
        	
        ]);

    }
}
