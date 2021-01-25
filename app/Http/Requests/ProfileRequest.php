<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'user_id' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'prefix' => 'required',
            'suffix' => 'required',
            'asociation' => 'required',
            'title' => 'required',
            'comp_website' => 'required',
            'str_add_one' => 'required',
            'str_add_two' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
            'comp_type' => 'required',
            // 'tax_add' => 'required|boolean',
            // 'send_mail' => 'required|boolean',
            'image' => 'nullable|image',
            'zip'=>'required|numeric',
            
        ];
    }
}
