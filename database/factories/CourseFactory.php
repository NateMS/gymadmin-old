<?php

use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(App\Course::class, function (Faker $faker) {

    $date = $faker->dateTimeThisYear($max = '+12 months', $timezone = date_default_timezone_get());

    return [
        'course_nr'      => $faker->numerify('AG-## ######.###'),
        'course_type_id' => function () {
                                return App\CourseType::inRandomOrder()->first()->id;
                            },
        'team_id'        => function () {
                                return App\Team::inRandomOrder()->first()->id;
                            },
        'location'       => $faker->city,
        'date_from'      => (Carbon::instance($date)),
        'date_to'        => (Carbon::instance($date))->addDays(rand(1, 4)),
        'deadline'       => (Carbon::instance($date))->subMonths(2),
        'link'           => $faker->url
    ];
});
