<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InvoceUpdateRequest extends FormRequest
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
            'c_producto'   =>'required|numeric',
            'c_carrera'    =>'required|numeric',
            'driver_id'    =>'required|exists:drivers,id',
            'user_id'      =>'required|exists:users,id',
            'company_id'   =>'required|exists:companies,id',
            'client_id'    =>'required|exists:clients,id'
        ];
    }
}
