<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\JsonResponse;

class ApiRequest extends FormRequest
{
    protected function failedValidation(Validator $validator)
    {
        $error = (new ValidationException($validator))->errors();
        throw new HttpResponseException(error('Validation error', ['errors' => $error], 422));

        // parent::failedValidation($validator);
    }

    protected function failedAuthorization()
    {
        throw new HttpResponseException(error('Unauthorized', [], 401));
    }
}

