<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use \App\Models\Planos;
use Illuminate\Validation\Rule;

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
     
        $plan = Planos::find($this->segment(3));

        return [
            'plan_nome' => ['required', 'max:255', Rule::unique('planos')->ignore($plan)],
            'plan_descricao' => 'nullable|min:3|max:255',
            'plan_preco' => "required|regex:/^\d+(\.\d{1,2})?$/"
        ];
    }
}
