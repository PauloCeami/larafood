<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdatePlanoRequest extends FormRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {

        $plan_id = $this->segment(3);

        return [
            'plan_nome' => 'required|min:3|max:255|unique:planos,plan_id,{$plan_id},plan_id',
            'plan_descricao' => 'nullable|min:3|max:255|unique',
            'plan_preco' => "required|regex:/^\d+(\.\d{1,2})?$/"
        ];
    }
}
