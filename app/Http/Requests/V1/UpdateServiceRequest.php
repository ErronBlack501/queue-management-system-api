<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class UpdateServiceRequest extends FormRequest
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
        $method = $this->method();

        if ($method === "PUT") {
            return [
                'serviceName' => 'required',
                'serviceDescription' => 'required',
                'isActive' => 'required|boolean'
            ];
        } else {
            return [
                'serviceName' => 'sometimes|required',
                'serviceDescription' => 'sometimes|required',
                'isActive' => 'sometimes|required|boolean'
            ];
        }
    }

    protected function prepareForValidation()
    {
        $input = [
            'service_name' => $this->serviceName,
            'service_description' => $this->serviceDescription,
            'is_active' => $this->isActive
        ];

        if ($this->isThereAnyNullValue($input)) {
            $filtratedInput = array_filter(
                $input,
                function ($value) {
                    return $value !== null;
                }
            );
            if (count($filtratedInput) > 0) $this->merge($filtratedInput);
        } else {
            $this->merge($input);
        }
    }

    private function isThereAnyNullValue(array $array): bool
    {
        foreach ($array as $value) {
            if (is_null($value)) return true;
        }
        return false;
    }
}
