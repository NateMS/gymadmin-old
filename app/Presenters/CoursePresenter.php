<?php
namespace App\Presenters;

use Laracodes\Presenter\Presenter;

class CoursePresenter extends Presenter
{
    use DatePresenter;

    public function duration()
    {
        $days = $this->durationDays();
        return $days . ' ' . trans_choice('main.days', $days);
    }

    public function durationDays()
    {

        return $this->model->date_from->diffInDays($this->model->date_to);
    }


    public function datefrom()
    {
        return $this->getDateTimeFormated($this->model->date_from);
    }

    public function dateto()
    {
        return $this->getDateTimeFormated($this->model->date_to);
    }


    public function date()
    {
        return $this->dateFrom() . ' - ' . $this->dateTo() . ' (' . $this->duration() . ')';
    }

    public function deadline()
    {
        return $this->getDateTimeFormated($this->model->deadline);
    }
}
