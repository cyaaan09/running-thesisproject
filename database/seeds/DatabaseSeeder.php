<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CoursesTableSeeder::class);
        $this->call(TypesTableSeeder::class);
        $this->call(SubjectsTableSeeder::class);
        $this->call(Subject_DetailsTableSeeder::class);
        $this->call(InstructorsTableSeeder::class);
        $this->call(SectionsTableSeeder::class);
        $this->call(Course_SectionsTableSeeder::class);
        $this->call(Instructor_SubjectsTableSeeder::class);
        $this->call(RoomsTableSeeder::class);
        $this->call(Meeting_TimesTableSeeder::class);
        $this->call(DistancesTableSeeder::class);
    }
}
