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

    protected $fillable = [
        'course_nr',
        'course_type_id',
        'location',
        'date_from',
        'date_to',
        'deadline',
        'link'
    ];

    public function CourseType()
    {
        return $this->belongsTo('App\CourseType');
    }

    public function participants()
    {
        return $this->belongsToMany('App\User')->withPivot('status_id');
    }

    public function setDateFromAttribute($value)
    {
        $this->attributes['date_from'] = (new Carbon($value))->format('Y-m-d');
    }

    public function setDateToAttribute($value)
    {
        $this->attributes['date_to'] = (new Carbon($value))->format('Y-m-d');
    }

    public function setDeadlineAttribute($value)
    {
        $this->attributes['deadline'] = (new Carbon($value))->format('Y-m-d');
    }
}
