<?php

use App\CourseType;
use Illuminate\Database\Seeder;

class CourseTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courseTypes = [
            ["name" => "WB I KuTu / GeTu"],
            ["name" => "WB II KuTu / GeTu"],
            ["name" => "Grundkurs KuTu"],
            ["name" => "Kindersport Einführungskurs"],
            ["name" => "Kindersport FK"],
        ];

        foreach ($courseTypes as $courseType) {
            CourseType::create([
                'name'   => $courseType['name']
            ]);
        }
    }
}
