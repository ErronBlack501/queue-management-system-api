<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class StoreServiceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'serviceName' => 'required',
            'serviceDescription' => 'required',
            'isActive' => 'required|boolean'
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'service_name' => $this->serviceName,
            'service_description' => $this->serviceDescription,
            'is_active' => $this->isActive
        ]);
    }
}
