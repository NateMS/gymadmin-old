<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laracodes\Presenter\Traits\Presentable;

class CourseType extends Model
{
    use Presentable;

    protected $presenter = 'App\Presenters\CoursePresenter';
    protected $table = 'course_types';
}
