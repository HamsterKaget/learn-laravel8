<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class WaifuRequest extends FormRequest
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
        $rule_task_unique = Rule::unique('waifu', 'waifu');
        if($this->method() !== 'POST') {
            $rule_task_unique->ignore($this->route()->parameter('id'));
        }

        return [
            'waifu' => ['required', $rule_task_unique],
            'anime' => ['required'],
        ];
    }
}
