<?php

namespace Modules\Api\Http\Requests;


use App\Rules\MaxCharRule;

class UserAccountRegisterRequest extends ApiRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username' => ['required', new MaxCharRule('username', 50)],
            'password' => ['required', new MaxCharRule('password', 50)],
            'confirmPassword' => 'nullable|required_unless:password,null|same:password',
        ];
    }

    public function messages()
    {
        return [
            'username.required' => str_replace('{0}', 'Username', MSG_API_007),
            'password.required' => str_replace('{0}', 'Password', MSG_API_007),
            'confirmPassword.required_unless' => str_replace('{0}', 'Password confirm', MSG_API_007),
            'confirmPassword.same' => MSG_API_015,
        ];
    }
}
