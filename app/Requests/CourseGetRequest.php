<?php

namespace App\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseGetRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => ['sometimes', 'string'],
        ];
    }
}