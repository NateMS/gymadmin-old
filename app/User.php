<?php

namespace App;

use Laravel\Spark\CanJoinTeams;
use Laravel\Spark\User as SparkUser;
use Laracodes\Presenter\Traits\Presentable;
use Silber\Bouncer\Database\HasRolesAndAbilities;

class User extends SparkUser
{
    use CanJoinTeams, Presentable, HasRolesAndAbilities;

    protected $presenter = 'App\Presenters\UserPresenter';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'authy_id',
        'country_code',
        'phone',
        'card_brand',
        'card_last_four',
        'card_country',
        'billing_address',
        'billing_address_line_2',
        'billing_city',
        'billing_zip',
        'billing_country',
        'extra_billing_information',
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'trial_ends_at' => 'datetime',
        'uses_two_factor_auth' => 'boolean',
    ];

    public function courses()
    {
        return $this->belongsToMany('App\Course')->withPivot('status_id');
    }

    public function courseStatus(Course $course, User $user)
    {
        //dump(CourseStatus::where('course_id', $course->id)->where('user_id', $user->id));
        return '-';
    }

    public function isCoach()
    {
        return true; // TODO add correct check
    }
}
