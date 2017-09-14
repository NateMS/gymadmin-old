<?php

use App\CourseStatus;
use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = [
            ["name" => "signed_up"],
            ["name" => "enrolled"],
            ["name" => "participated"]
        ];

        foreach ($statuses as $status) {
            CourseStatus::create([
                'name'   => $status['name']
            ]);
        }
    }
}
