<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:255',
            'lastname' => 'required|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'user_type' => 'required|in:alumno,maestro',

            'generation' => 'required_if:user_type,alumno',
            'classroom' => 'required_if:user_type,alumno',
            
            'address' => 'required_if:user_type,maestro',
            'phone' => 'required_if:user_type,maestro',
            'subject' => 'required_if:user_type,maestro',
        ];
    }
}
