<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplyRequest extends FormRequest
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
            'firstName' => 'required',
            'lastName' => 'required',
            'middleName' => 'required',
            'phoneNumber' => 'required',//|unique:students,phoneNumber',
            'email' => 'required',//|unique:students,email',
            'programme' => 'required',
            'course' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'firstName.required' => 'First Name Can Not Be Empty',
            'lastName.required' => 'Last Name Can Not Be Empty',
            'middleName.required' => 'Middle Name Can Not Be Empty',
            'phoneNumber.required' => 'Phone Number Can Not Be Empty',
            'email.required' => 'Email Can Not Be Empty',
            'programme.required' => 'Please Select A Programme',
            'course.required' => 'Please Select A Course',
            // 'phoneNumber.unique' => 'User Already Registered with Phone Number',
            // 'email.unique' => 'User Already Registered with Email',
        ];
    }
}
