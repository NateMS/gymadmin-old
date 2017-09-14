<?php

namespace App;

use App\Traits\UsedByTeams;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Laracodes\Presenter\Traits\Presentable;

class Course extends Model
{
    use Presentable, UsedByTeams;

    protected $presenter = 'App\Presenters\CoursePresenter';

    protected $dates = [
        'created_at',
        'updated_at',
        'date_from',
        'date_to',
        'deadline'
    ];

    public function CourseType()
    {
        return $this->belongsTo(CourseType::class);
    }

    public function participants()
    {
        return $this->belongsToMany(User::class);
    }
}
