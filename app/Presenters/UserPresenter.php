<?php
namespace App\Presenters;

use Laracodes\Presenter\Presenter;

class UserPresenter extends Presenter
{
    public function name()
    {
        return $this->model->firstname . ' ' . $this->model->lastname;
    }

    public function emailLink()
    {
        return '<a href="mailto:' . $this->model->email . '" class="email-link">' . $this->model->email . '</a>';
    }

    public function address()
    {
        return $this->model->address;
    }

    public function zip()
    {
        return $this->model->zip;
    }

    public function city()
    {
        return $this->model->city;
    }

    public function fullAddress()
    {
        return $this->address() . ', ' . $this->zip() . ' ' . $this->city();
    }

    public function jsNumber()
    {
        return $this->model->js_number ? $this->model->js_number : '-';
    }

    public function stvNumber()
    {
        return $this->model->stv_number ? $this->model->stv_number : '-';
    }

    public function phone()
    {
        return $this->model->phone ? $this->model->phone : '-';
    }

    public function accountAge()
    {
        return $this->model->created_at->diffForHumans();
    }
}
