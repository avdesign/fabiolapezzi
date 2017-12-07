<?php

namespace AVD\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddressUpdateRequest extends FormRequest
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
        if ($this->method() == 'PUT') {
            return [
                "address"  => "required",
                "number"   => "required",
                "district" => "required",
                "city"     => "required",
                "zip_code" => "required",
                "zip_code" => "required",
                "state"    => "required"
            ];
        }
    }


    public function messages()
    {
        return [
            "address.required"  => "O Endereço é Obrigatório",
            "number.required"   => "O Número é Obrigatório",
            "district.required" => "O Bairro é Obrigatório",
            "city.required"     => "A Cidade é Obrigatória",
            "zip_code.required" => "O CEP é Obrigatório",
            "state.required"    => "O Estado é Obrigatório"
        ];
    }
}
