<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyStoreRequest extends FormRequest
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

    /* public function validateResolved() */
    /* { */
    /*     { */
    /*         /1* $this->sanitize(); *1/ */
    /*         parent::validateResolved(); */
    /*     } */
    /* } */

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email|distinct',
            'logo' => 'image|dimensions:max_width=100,max_height=100',
            'website' => 'url'
        ];
    }
}
