<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DriverUpdateRequest extends FormRequest
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
            'name'          =>'required',
            'phone'         =>'required|numeric',
            'estado'         =>'required|in:inactivo,activo',
            'placa'         =>'required|Min:6|Max:10',
            'company_id'    =>'required|exists:companies,id'
        ];
    }
}
