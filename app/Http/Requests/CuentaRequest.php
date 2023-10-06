<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CuentaRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'user' => 'required|max:20|unique:cuentas',
            'email' => 'required|max:30',
            'password' => 'bail|required|min:6|max:15|same:password2',
            'nombre' => 'required|max:20|',
            'peso' => 'required',
            'estatura' => 'required',
            'cuerpo' => 'required|max:20',
            'estado' => 'required|max:20',
        ];
    }

     public function messages():array
    {
        return [
            'user.required' => 'Escriba un usuario por favor.',
            'user.max' => 'El usuario puede contener hasta 20 caracteres',
            'user.unique' => 'Este usuario ya ha sido creado, por favor ingrese otro',
            'email.required' => 'Escriba un email por favor.',
            'email.max' => 'El email puede contener hasta 30 caracteres',
            'password.min' => 'Debe ingresar 6 caracteres como minimo',
            'password.max' => 'La constraseña puede contener hasta 15 caracteres',
            'password.same' => 'Las contraseñas no son iguales',
            'nombre.required' => 'Por favor ingrese un nombre',
            'nombre.max' => 'El nombre puede contener hasta 20 caracteres',
            'peso.required' => 'Por favor ingrese su peso',
            'estatura.required' => 'Porfavor ingrese su estatura',
            'cuerpo.required' => 'Porfavor ingrese su tipo de cuerpo',
            'estado.required' => 'Porfavor ingrese su estado nutricional',
            'estado.max' => 'El estado puede contener hasta 20 caracteres',
            'cuerpo.max' => 'El cuerpo puede contener hasta 20 caracteres',

        ];
    }
}
