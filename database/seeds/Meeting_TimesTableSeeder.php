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
        		'start' => '7:30 AM',
        		'end' => '9:00 AM',
        		'duration' => '1.5',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Mon',
        		'start' => '9:00 AM',
        		'end' => '10:30 AM',
        		'duration' => '1.5',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Mon',
        		'start' => '10:30 AM',
        		'end' => '12:00 PM',
        		'duration' => '1.5',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Mon',
        		'start' => '12:00 PM',
        		'end' => '1:30 PM',
        		'duration' => '1.5',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Mon',
        		'start' => '1:30 PM',
        		'end' => '3:00 PM',
        		'duration' => '1.5',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Mon',
        		'start' => '3:00 PM',
        		'end' => '4:30 PM',
        		'duration' => '1.5',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Mon',
        		'start' => '4:30 PM',
        		'end' => '6:00 PM',
        		'duration' => '1.5',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'day' => 'Mon',
        		'start' => '6:00 PM',
        		'end' => '7:30 PM',
        		'duration' => '1.5',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

            [
                'day' => 'Mon',
                'start' => '7:30 PM',
                'end' => '9:00 PM',
                'duration' => '1.5',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

        	[
                'day' => 'Tue',
                'start' => '7:30 AM',
                'end' => '9:00 AM',
                'duration' => '1.5',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'day' => 'Tue',
                'start' => '9:00 AM',
                'end' => '10:30 AM',
                'duration' => '1.5',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'day' => 'Tue',
                'start' => '10:30 AM',
                'end' => '12:00 PM',
                'duration' => '1.5',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'day' => 'Tue',
                'start' => '12:00 PM',
                'end' => '1:30 PM',
                'duration' => '1.5',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'day' => 'Tue',
                'start' => '1:30 PM',
                'end' => '3:00 PM',
                'duration' => '1.5',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'day' => 'Tue',
                'start' => '3:00 PM',
                'end' => '4:30 PM',
                'duration' => '1.5',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'day' => 'Tue',
                'start' => '4:30 PM',
                'end' => '6:00 PM',
                'duration' => '1.5',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'day' => 'Tue',
                'start' => '6:00 PM',
                'end' => '7:30 PM',
                'duration' => '1.5',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'day' => 'Tue',
                'start' => '7:30 PM',
                'end' => '9:00 PM',
                'duration' => '1.5',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'day' => 'Wed',
                'start' => '7:00 AM',
                'end' => '9:00 AM',
                'duration' => '2',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'day' => 'Wed',
                'start' => '9:00 AM',
                'end' => '11:00 AM',
                'duration' => '2',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'day' => 'Wed',
                'start' => '1:00 AM',
                'end' => '3:00 AM',
                'duration' => '2',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'day' => 'Wed',
                'start' => '3:00 AM',
                'end' => '5:00 AM',
                'duration' => '2',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'day' => 'Sat',
                'start' => '7:00 AM',
                'end' => '10:00 AM',
                'duration' => '3',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'day' => 'Sat',
                'start' => '1:00 PM',
                'end' => '4:00 PM',
                'duration' => '3',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],



            
        	
        ]);
    }
}
