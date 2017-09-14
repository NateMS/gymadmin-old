<?php

namespace App;

use App\Traits\UsedByTeams;
use Illuminate\Database\Eloquent\Model;
use Laracodes\Presenter\Traits\Presentable;

class CourseType extends Model
{
    use Presentable, UsedByTeams;

    protected $presenter = 'App\Presenters\CoursePresenter';
    protected $table = 'course_types';
}
