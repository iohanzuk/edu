<?php


namespace App\Requests;


use App\Domain\Enums\ClientTypeEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ClientPostRequest extends FormRequest
{
    public function rules()
    {
        return [
            'cpf' => 'required',
            'name' => 'required',
            'email' => 'required',
            'cell_phone' => ['required', 'integer'],
            'user_id' =>['sometimes', Rule::exists('users', 'id')],
            'responsible_id' => ['sometimes', Rule::exists('clients', 'id')],
            'client_type_id' => ['required', Rule::in(ClientTypeEnum::toArray())]
        ];
    }
}