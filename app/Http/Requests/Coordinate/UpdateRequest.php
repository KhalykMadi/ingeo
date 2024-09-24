<?php

namespace App\Http\Requests\Coordinate;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
        return [
            'title' => 'required|string',
            'text' => 'required|string',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'region_id' => 'required|integer|exists:regions,id',
        ];
    }
}
