<?php

namespace Spf\Http\Requests;

class MissingCreateRequest extends Request
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
            'first_name'    => 'required',
            'last_name'     => 'required',
            'age'           => 'required|numeric',
            'gender'        => 'required',
            'photo'         => 'image',
            'address'       => 'required',
            'last_location' => 'required',
            'description'   => 'required',
            'name'          => 'required',
            'last_nameR'    => 'required',
            'email'         => 'required|email',
            'phone'         => 'numeric'
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'first_name.required'    => 'Ingresa el nombre de la persona desaparecida',
            'last_name.required'     => 'Ingresa el apellido de la persona desaparecida',
            'age.required'           => 'Ingresa la edad aproximada de la persona desaparecida',
            'age.numeric'            => 'Ingresa la edad únicamente en números',
            'gender.required'        => 'Selecciona el género de la persona desaparecida',
            'photo.image'            => 'La foto debe ser únicamente .jpg o .png',
            'address.required'       => 'Ingresa la ciudad de la persona desaparecida',
            'last_location.required' => 'Ingresa la última ubicación conocida',
            'description.required'   => 'Ingresa una descripción acerca de la persona desaparecida',
            'name.required'          => 'Ingresa tu nombre',
            'last_nameR.required'    => 'Ingresa tu apellido',
            'email.required'         => 'Ingresa un email para poder contactarte',
            'email.email'            => 'Ingresa un email válido',
            'phone.numeric'          => 'Tu número de teléfono debe tener únicamente números'
        ];
    }
}
