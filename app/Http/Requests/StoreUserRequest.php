<?php

namespace App\Http\Requests;

use App\Models\User;
use App\Enums\UserRoles;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Enum;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'username' => ['required', 'unique:'.User::class],
            'email' => ['required', 'string'],
            'role' => ['required', new Enum(UserRoles::class)],
            'mapel_id'  =>['integer'],
            'password' => ['required', 'string']
        ];
    }
}
