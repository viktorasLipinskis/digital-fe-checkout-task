<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LogClickRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'element' => ['required', 'string', 'max:10000'],
            'attributes' => ['required', 'array', 'min:0'],
            'attributes.*' => ['required', 'string'],
        ];
    }
}
