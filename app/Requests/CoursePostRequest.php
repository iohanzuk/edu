<?php

namespace App\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class CoursePostRequest extends FormRequest
{
    public function rules(Request $request)
    {
        return [
            'name' => ['required', 'string'],
        ];
    }
}