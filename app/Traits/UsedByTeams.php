<?php
namespace App\Traits;

use App\Team;
use Exception;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;

/**
 * Class UsedByTeams
 * @package Mpociot\Teamwork\Traits
 */
trait UsedByTeams
{
    /**
     * Boot the global scope
     */
    protected static function bootUsedByTeams()
    {
        static::addGlobalScope('team', function (Builder $builder) {
            static::teamGuard();

            $builder->where($builder->getQuery()->from . '.team_id', auth()->user()->currentTeam->id);
        });

        static::saving(function (Model $model) {
            static::teamGuard();

            if (!isset($model->team_id)) {
                $model->team_id = auth()->user()->currentTeam->id;
            }
        });
    }

    /**
     * @param Builder $query
     * @return mixed
     */
    public function scopeAllTeams(Builder $query)
    {
        return $query->withoutGlobalScope('team');
    }

    /**
     * @return mixed
     */
    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    /**
     * @throws Exception
     */
    protected static function teamGuard()
    {
        if (auth()->guest() || !auth()->user()->currentTeam) {
            throw new Exception('No authenticated user with selected team present.');
        }
    }
}
