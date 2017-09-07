<?php
namespace App\Presenters;

use Laracodes\Presenter\Presenter;

class CourseTypePresenter extends Presenter
{
    public function name()
    {
        return $this->model->name;
    }
}