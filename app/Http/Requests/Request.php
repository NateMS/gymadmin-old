<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

abstract class Request extends FormRequest
{
    /**
     *
     * @return boolean
     */
    public function authorize()
    {
        return true;
    }
}