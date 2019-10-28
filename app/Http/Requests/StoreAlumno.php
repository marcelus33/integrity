<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAlumno extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
        // return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre_alumno'=>'required',
            'cedula_numero'=>'required|min:3|unique:alumnos',
            'celular'=>'max:12',
            'fecha_de_nacimiento'=>'date',
            'lugar_de_nacimiento'=>'max:30',
            'nacionalidad'=>'max:20',
            'sexo'=>'required',
            'observacion'=>'max:512',
            // 'id_padres'=>'required'
        ];
    }
}
