<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function CourseType()
    {
        return $this->belongsTo(CourseType::class);
    }

    public function participants()
    {
        return $this->belongsToMany(User::class);
    }
}
