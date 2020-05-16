<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
        	[
        		'name' => 'BSIT',
        		'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	]

        ]);
    }
}
