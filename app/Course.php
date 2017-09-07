<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon;

class Course extends Model
{

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
