<?php

namespace Spf\Http\Requests;

class MissingUpdateRequest extends Request
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
            'photo'         => 'image',
            'last_location' => 'required',
            'message_user'  => 'required',
            'status'        => 'required',
            'name'          => 'required',
            'last_nameR'    => 'required',
            'email'         => 'required|email',
            'phone'         => 'required|numeric'
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'photo.image'            => 'La foto debe ser únicamente .jpg o .png',
            'last_location.required' => 'Ingresa la última ubicación conocida',
            'message_user.required'  => 'Ingresa una descripción acerca de la persona desaparecida',
            'status.required'        => 'Selecciona un status de la persona',
            'name.required'          => 'Ingresa tu nombre',
            'last_nameR.required'    => 'Ingresa tu apellido',
            'email.required'         => 'Ingresa un email para poder contactarte',
            'email.email'            => 'Ingresa un email válido',
            'phone.required'         => 'Ingresa tu número telefónico',
            'phone.numeric'          => 'Tu número de teléfono debe tener únicamente números'
        ];
    }
}
