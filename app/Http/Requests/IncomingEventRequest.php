<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IncomingEventRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'type' => 'required|string',
            'data' => 'required|json',
            'request' => 'required|json',
        ];
    }
}
