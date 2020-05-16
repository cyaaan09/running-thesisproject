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
    	
        DB::table('distances')->insert([
        	[
        		'from_room_id' => 1,
        		'to_room_id' => 2,
        		'distance' => 5,
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

            [
                'from_room_id' => 1,
                'to_room_id' => 3,
                'distance' => 16,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'from_room_id' => 1,
                'to_room_id' => 4,
                'distance' => 17,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'from_room_id' => 1,
                'to_room_id' => 5,
                'distance' => 20,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'from_room_id' => 1,
                'to_room_id' => 6,
                'distance' => 49,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'from_room_id' => 1,
                'to_room_id' => 7,
                'distance' => 50,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'from_room_id' => 1,
                'to_room_id' => 8,
                'distance' => 52,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'from_room_id' => 1,
                'to_room_id' => 9,
                'distance' => 53,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'from_room_id' => 1,
                'to_room_id' => 10,
                'distance' => 60,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'from_room_id' => 1,
                'to_room_id' => 11,
                'distance' => 62,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'from_room_id' => 2,
                'to_room_id' => 3,
                'distance' => 12,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'from_room_id' => 2,
                'to_room_id' => 4,
                'distance' => 14,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'from_room_id' => 2,
                'to_room_id' => 5,
                'distance' => 15,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'from_room_id' => 2,
                'to_room_id' => 6,
                'distance' => 40,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'from_room_id' => 2,
                'to_room_id' => 7,
                'distance' => 43,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'from_room_id' => 2,
                'to_room_id' => 8,
                'distance' => 44,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'from_room_id' => 2,
                'to_room_id' => 9,
                'distance' => 46,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'from_room_id' => 2,
                'to_room_id' => 10,
                'distance' => 52,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'from_room_id' => 2,
                'to_room_id' => 11,
                'distance' => 54,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'from_room_id' => 3,
                'to_room_id' => 4,
                'distance' => 5,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'from_room_id' => 3,
                'to_room_id' => 5,
                'distance' => 10,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'from_room_id' => 3,
                'to_room_id' => 6,
                'distance' => 28,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'from_room_id' => 3,
                'to_room_id' => 7,
                'distance' => 25,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'from_room_id' => 3,
                'to_room_id' => 8,
                'distance' => 32,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'from_room_id' => 3,
                'to_room_id' => 9,
                'distance' => 34,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'from_room_id' => 3,
                'to_room_id' => 10,
                'distance' => 40,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'from_room_id' => 3,
                'to_room_id' => 11,
                'distance' => 48,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'from_room_id' => 4,
                'to_room_id' => 5,
                'distance' => 10,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'from_room_id' => 4,
                'to_room_id' => 6,
                'distance' => 29,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'from_room_id' => 4,
                'to_room_id' => 7,
                'distance' => 33,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'from_room_id' => 4,
                'to_room_id' => 8,
                'distance' => 33,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

            [
                'from_room_id' => 4,
                'to_room_id' => 9,
                'distance' => 34,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],


            [
                'from_room_id' => 4,
                'to_room_id' => 10,
                'distance' => 41,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],


            [
                'from_room_id' => 4,
                'to_room_id' => 11,
                'distance' => 42,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],


            [
                'from_room_id' => 5,
                'to_room_id' => 6,
                'distance' => 38,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],


            [
                'from_room_id' => 5,
                'to_room_id' => 7,
                'distance' => 34,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],


            [
                'from_room_id' => 5,
                'to_room_id' => 8,
                'distance' => 30,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],


            [
                'from_room_id' => 5,
                'to_room_id' => 9,
                'distance' => 32,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],


            [
                'from_room_id' => 5,
                'to_room_id' => 10,
                'distance' => 43,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],


            [
                'from_room_id' => 5,
                'to_room_id' => 11,
                'distance' => 45,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],


            [
                'from_room_id' => 6,
                'to_room_id' => 7,
                'distance' => 10,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],


            [
                'from_room_id' => 6,
                'to_room_id' => 8,
                'distance' => 16,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],


            [
                'from_room_id' => 6,
                'to_room_id' => 9,
                'distance' => 18,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],


            [
                'from_room_id' => 6,
                'to_room_id' => 10,
                'distance' => 30,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],


            [
                'from_room_id' => 6,
                'to_room_id' => 11,
                'distance' => 32,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],


            [
                'from_room_id' => 7,
                'to_room_id' => 8,
                'distance' => 9,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],


            [
                'from_room_id' => 7,
                'to_room_id' => 8,
                'distance' => 9,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],


            [
                'from_room_id' => 7,
                'to_room_id' => 9,
                'distance' => 11,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],


            [
                'from_room_id' => 7,
                'to_room_id' => 10,
                'distance' => 25,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],


            [
                'from_room_id' => 7,
                'to_room_id' => 11,
                'distance' => 27,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],


            [
                'from_room_id' => 8,
                'to_room_id' => 9,
                'distance' => 3,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],


            [
                'from_room_id' => 8,
                'to_room_id' => 10,
                'distance' => 25,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],


            [
                'from_room_id' => 8,
                'to_room_id' => 11,
                'distance' => 27,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],


            [
                'from_room_id' => 9,
                'to_room_id' => 10,
                'distance' => 28,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],


            [
                'from_room_id' => 9,
                'to_room_id' => 11,
                'distance' => 30,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],


            [
                'from_room_id' => 10,
                'to_room_id' => 11,
                'distance' => 3,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],


            
        ]);    				
    			
    		
    }
    
}
