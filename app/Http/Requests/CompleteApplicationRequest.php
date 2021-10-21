<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompleteApplicationRequest extends FormRequest
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
            'phoneNumber' => 'required',
            'email' => 'required',
            'programme' => 'required',
            'maritalStatus' => 'required',
            'course' => 'required',
            'dob' => 'required',
            'state' => 'required',
            'gender' => 'required',
            'contactAddress' => 'required',
            'nationality' => 'required',
            'lga' => 'required',
            'nextOfKinFullName' => 'required',
            'nextOfKinRelationship' => 'required',
            'nextOfKinAddress' => 'required',
            'nextOfKinPhoneNumber' => 'required',
            'session' => 'required',
            'jamb' => 'required',
            'wace' => 'required',
            'neco' => '',
            'passport' => 'required',
        ];
    }
}
