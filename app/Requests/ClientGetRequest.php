<?php

namespace App\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ClientGetRequest extends FormRequest
{
    public function rules(Request $request)
    {
        return [
            'course_class_id'      => ['sometimes', Rule::exists('course_classes', 'id')],
            'couser_id'            => ['sometimes', Rule::exists('courses', 'id')],
            'name'                 => ['sometimes', 'string'],
        ];
    }
}