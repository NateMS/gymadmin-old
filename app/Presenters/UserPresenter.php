<?php
namespace App\Presenters;

use Laracodes\Presenter\Presenter;

class UserPresenter extends Presenter
{
    public function fullName()
    {
        return $this->model->first_name . ' ' . $this->model->last_name;
    }

    public function accountAge()
    {
        return $this->model->created_at->diffForHumans();
    }
}