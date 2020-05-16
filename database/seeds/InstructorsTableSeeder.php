<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstructorsTableSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('instructors')->insert([
        	[
        		'name' => 'Dr Junrie B. Matias',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'name' => 'Dr Jaymer M. Jayoma',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'name' => 'Dr Mark Phil B. Pacot',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'name' => 'MA. Besa Joy M. Urtuyo',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'name' => 'Jesterlyn Q. Timosan',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'name' => 'Roland P. Abao',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'name' => 'Engr. Rudolph Joshua M. Candare',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'name' => 'James Earl D. Cubillas',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'name' => 'Jennifer E. Sabugaa',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
        	],

        	[
        		'name' => 'Gleen A. Dalaorao',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'name' => 'Vicente A. Pitogo',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'name' => 'Jane Francis P. Jaictin',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'name' => 'Takeyasu V. Nakazato',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'name' => 'Jenie L. Plender',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'name' => 'john Carlo F. Camba',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'name' => 'Rejeanfe E. Gallito',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'name' => 'Elbert S. Moyon',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'name' => 'Melbert R. Bonotan',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'name' => 'Dr. Rolyn C. Daguil',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'name' => 'Dr. James V. Presbitero',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        	[
        		'name' => 'Cherry I. Tabada',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
        	],

        ]);
    }
}
