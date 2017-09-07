<?php

namespace App\Http\Requests;

class CourseRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'course_nr' => 'required|max:255',
            'team_id'   => 'required|numeric',
            'location'  => 'required|max:255',
            'date_from' => 'required|date|date_format:d.m.Y',
            'date_to'   => 'required|date|date_format:d.m.Y',
            'deadline'  => 'required|date|date_format:d.m.Y',
            'link'      => 'required',
        ];

        // special rules for creating
        if ($this->method() == 'PUT') {
            //
        }

        return $rules;
    }
}