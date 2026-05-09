<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\RateLimiter;

class StoreOrderRequest extends FormRequest
{
    public function authorize(): bool
    {
        if (RateLimiter::tooManyAttempts('order:' . $this->ip(), 5)) {
            abort(429, 'Забагато спроб. Спробуйте пізніше.');
        }

        RateLimiter::hit('order:' . $this->ip(), 3600);

        return true;
    }

    public function rules(): array
    {
        return [
            'name'          => 'required|string|min:2|max:100',
            'contact_type'  => 'required|in:tg,phone',
            'contact_value' => 'required|string|max:100',
            'work_type'     => 'required|in:coursework,diploma,master,other',
            'university'    => 'nullable|string|max:200',
            'deadline'      => 'nullable|date|after:today',
            'comment'       => 'nullable|string|max:2000',
            'file'          => 'nullable|file|mimes:doc,docx,pdf,txt|max:20480',
            'website'       => 'nullable|max:0',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'          => "Вкажіть ваше ім'я.",
            'name.min'               => "Ім'я має містити щонайменше 2 символи.",
            'name.max'               => "Ім'я не може перевищувати 100 символів.",
            'contact_type.required'  => "Оберіть спосіб зв'язку.",
            'contact_type.in'        => "Невірний спосіб зв'язку.",
            'contact_value.required' => 'Вкажіть контактні дані.',
            'contact_value.max'      => 'Контактні дані не можуть перевищувати 100 символів.',
            'work_type.required'     => 'Оберіть тип роботи.',
            'work_type.in'           => 'Невірний тип роботи.',
            'university.max'         => 'Назва вишу не може перевищувати 200 символів.',
            'deadline.date'          => 'Невірний формат дати.',
            'deadline.after'         => 'Дедлайн має бути пізніше сьогодні.',
            'comment.max'            => 'Коментар не може перевищувати 2000 символів.',
            'file.file'              => 'Невірний формат файлу.',
            'file.mimes'             => 'Дозволені формати: doc, docx, pdf, txt.',
            'file.max'               => 'Розмір файлу не може перевищувати 20 МБ.',
        ];
    }

    // Якщо спрацював honeypot — мовчки редіректимо на /thanks
    protected function failedValidation(Validator $validator): void
    {
        if ($this->filled('website')) {
            throw new HttpResponseException(redirect()->route('thanks'));
        }

        parent::failedValidation($validator);
    }
}
