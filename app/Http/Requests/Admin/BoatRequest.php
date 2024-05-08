<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BoatRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        switch($this->method()) {
            case 'POST' : {
                return [
                    'name' => 'required',
                    'boat_name' => 'required',
                    'jenis_trip' => 'required',
                    'cabins' => 'required',
                    'images' => ['required', 'image', 'mimes:png,jpg,jpeg'],
                    'capacity' => 'required',
                ];
            }
            case 'PUT':
            case 'PATCH': {
                return [
                    'name' => 'required',
                    'boat_name' => 'required',
                    'jenis_trip' => 'required',
                    'cabins' => 'required',
                    'images' => ['image', 'mimes:png,jpg,jpeg'],
                    'capacity' => 'required',
                ];
            }
        }
    }
}
