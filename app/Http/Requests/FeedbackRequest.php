<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeedbackRequest extends FormRequest
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
            'name'  => 'required|min:3|max:100',
            'email' => 'sometimes|required|email|max:255',
            'phone' => 'sometimes|required|integer',
            'message'  => 'sometimes|required',
            'type' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Поле Ваше Имя не должно быть пустым',
            'name.min' => 'Ваше Имя долно состоять минимуи из 3 символов',
            'name.max' => 'Ваше Имя долно состоять максимум из 50 символов',
            'email.required' => 'Поле E-mail не должно быть пустым',
            'email.email' => 'Поле E-mail должно быть корректным email адресом',
            'email.max' => 'E-mail долно состоять максимум из 255 символов',
            'phone.required' => 'Поле с номером телофона не должно быть пустым',
            'phone.integer' => 'Поле с номером телофона должно быть числовым значением',
            'message.required' => 'Поле с текстом сообщения не должно быть пустым не должно быть пустым',
        ];
    }
}
