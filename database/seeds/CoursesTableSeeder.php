<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Course;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Course::class, 50)->create();
    }
}
