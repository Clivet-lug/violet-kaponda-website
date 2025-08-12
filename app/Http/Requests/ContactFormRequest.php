<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
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
     */
    public function rules(): array
    {
        $rules = [
            'inquiry_type' => 'required|in:speaking,partnership,media,general',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'organization' => 'nullable|string|max:255',
            'role' => 'nullable|string|max:255',
            'message' => 'required|string|max:2000',
        ];

        // Add conditional validation based on inquiry type
        $inquiryType = $this->input('inquiry_type');

        switch ($inquiryType) {
            case 'speaking':
                $rules = array_merge($rules, [
                    'event_date' => 'nullable|date|after:today',
                    'audience_size' => 'nullable|in:1-50,51-200,201-500,500+',
                    'speaking_topic' => 'nullable|in:fintech-ai,women-tech,digital-transformation,business-development,mindset-coaching,custom',
                    'event_format' => 'nullable|in:keynote,panel,workshop,fireside,virtual'
                ]);
                break;

            case 'partnership':
                $rules = array_merge($rules, [
                    'partnership_type' => 'nullable|in:business-development,strategic-consulting,deal-structuring,market-expansion,other',
                    'timeline' => 'nullable|in:immediate,short-term,medium-term,long-term',
                    'industry' => 'nullable|string|max:255'
                ]);
                break;

            case 'media':
                $rules = array_merge($rules, [
                    'media_type' => 'nullable|in:podcast,article,interview,expert-commentary,thought-leadership',
                    'publication' => 'nullable|string|max:255',
                    'media_topic' => 'nullable|string|max:255'
                ]);
                break;

            case 'general':
                $rules = array_merge($rules, [
                    'general_help' => 'nullable|in:networking,mentorship,collaboration,advice,other',
                    'background' => 'nullable|string|max:500'
                ]);
                break;
        }

        return $rules;
    }

    /**
     * Get custom messages for validator errors.
     */
    public function messages(): array
    {
        return [
            'inquiry_type.required' => 'Please select how I can help you.',
            'inquiry_type.in' => 'Please select a valid inquiry type.',
            'name.required' => 'Your name is required.',
            'email.required' => 'Your email address is required.',
            'email.email' => 'Please provide a valid email address.',
            'message.required' => 'Please tell me more about your inquiry.',
            'message.max' => 'Your message is too long. Please keep it under 2000 characters.',
            'event_date.after' => 'Event date must be in the future.',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     */
    public function attributes(): array
    {
        return [
            'inquiry_type' => 'inquiry type',
            'event_date' => 'event date',
            'audience_size' => 'audience size',
            'speaking_topic' => 'speaking topic',
            'event_format' => 'event format',
            'partnership_type' => 'partnership type',
            'media_type' => 'media type',
            'general_help' => 'how I can help',
        ];
    }

    /**
     * Prepare the data for validation.
     */
    protected function prepareForValidation(): void
    {
        // Clean and sanitize data
        $this->merge([
            'name' => trim($this->name),
            'email' => strtolower(trim($this->email)),
            'organization' => $this->organization ? trim($this->organization) : null,
            'role' => $this->role ? trim($this->role) : null,
            'message' => trim($this->message),
        ]);
    }
}
