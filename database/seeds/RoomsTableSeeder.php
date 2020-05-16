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
        		'seating_capacity' => 40,
        		'type_id' => 3,
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
        		'type_id' => 4,
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

        	// [
        	// 	'seating_capacity' => 50,
        	// 	'type_id' => 3,
         //        'created_at' => \Carbon\Carbon::now(),
         //        'updated_at' => \Carbon\Carbon::now()
        	// ],

        	// [
        	// 	'seating_capacity' => 50,
        	// 	'type_id' => 3,
         //        'created_at' => \Carbon\Carbon::now(),
         //        'updated_at' => \Carbon\Carbon::now()
        	// ],

        	// [
        	// 	'seating_capacity' => 50,
        	// 	'type_id' => 3,
         //        'created_at' => \Carbon\Carbon::now(),
         //        'updated_at' => \Carbon\Carbon::now()
        	// ],

        	// [
        	// 	'seating_capacity' => 50,
        	// 	'type_id' => 3,
         //        'created_at' => \Carbon\Carbon::now(),
         //        'updated_at' => \Carbon\Carbon::now()
        	// ],

        	// [
        	// 	'seating_capacity' => 50,
        	// 	'type_id' => 3,
         //        'created_at' => \Carbon\Carbon::now(),
         //        'updated_at' => \Carbon\Carbon::now()
        	// ],

        	// [
        	// 	'seating_capacity' => 50,
        	// 	'type_id' => 3,
         //        'created_at' => \Carbon\Carbon::now(),
         //        'updated_at' => \Carbon\Carbon::now()
        	// ],

        	// [
        	// 	'seating_capacity' => 50,
        	// 	'type_id' => 3,
         //        'created_at' => \Carbon\Carbon::now(),
         //        'updated_at' => \Carbon\Carbon::now()
        	// ],

        	// [
        	// 	'seating_capacity' => 50,
        	// 	'type_id' => 3,
         //        'created_at' => \Carbon\Carbon::now(),
         //        'updated_at' => \Carbon\Carbon::now()
        	// ],

        	// [
        	// 	'seating_capacity' => 50,
        	// 	'type_id' => 3,
         //        'created_at' => \Carbon\Carbon::now(),
         //        'updated_at' => \Carbon\Carbon::now()
        	// ],

        	// [
        	// 	'seating_capacity' => 50,
        	// 	'type_id' => 2,
         //        'created_at' => \Carbon\Carbon::now(),
         //        'updated_at' => \Carbon\Carbon::now()
        	// ],

        	// [
        	// 	'seating_capacity' => 50,
        	// 	'type_id' => 2,
         //        'created_at' => \Carbon\Carbon::now(),
         //        'updated_at' => \Carbon\Carbon::now()
        	// ],

        	// [
        	// 	'seating_capacity' => 50,
        	// 	'type_id' => 2,
         //        'created_at' => \Carbon\Carbon::now(),
         //        'updated_at' => \Carbon\Carbon::now()
        	// ],

        	// [
        	// 	'seating_capacity' => 50,
        	// 	'type_id' => 2,
         //        'created_at' => \Carbon\Carbon::now(),
         //        'updated_at' => \Carbon\Carbon::now()
        	// ],

        	// [
        	// 	'seating_capacity' => 50,
        	// 	'type_id' => 3,
         //        'created_at' => \Carbon\Carbon::now(),
         //        'updated_at' => \Carbon\Carbon::now()
        	// ],

        	// [
        	// 	'seating_capacity' => 50,
        	// 	'type_id' => 3,
         //        'created_at' => \Carbon\Carbon::now(),
         //        'updated_at' => \Carbon\Carbon::now()
        	// ],

        	// [
        	// 	'seating_capacity' => 50,
        	// 	'type_id' => 3,
         //        'created_at' => \Carbon\Carbon::now(),
         //        'updated_at' => \Carbon\Carbon::now()
        	// ],

        	// [
        	// 	'seating_capacity' => 50,
        	// 	'type_id' => 2,
         //        'created_at' => \Carbon\Carbon::now(),
         //        'updated_at' => \Carbon\Carbon::now()
        	// ],

        	// [
        	// 	'seating_capacity' => 50,
        	// 	'type_id' => 2,
         //        'created_at' => \Carbon\Carbon::now(),
         //        'updated_at' => \Carbon\Carbon::now()
        	// ],
        ]);
    }
}
