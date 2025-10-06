<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactInquiry;
use App\Mail\ContactConfirmation;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    /**
     * Display the contact page
     */
    public function index()
    {
        return view('pages.contact');
    }

    /**
     * Handle contact form submission
     */
    public function submit(ContactFormRequest $request)
    {
        try {
            // Get validated data
            $data = $request->validated();

            // Add timestamp and format data
            $data['submitted_at'] = now()->format('Y-m-d H:i:s');
            $data['inquiry_type_label'] = $this->getInquiryTypeLabel($data['inquiry_type']);

            // Send email to Violet
            Mail::to(config('mail.contact_email', 'violet@violetnswanakaponda.com'))
                ->send(new ContactInquiry($data));

            // Send confirmation to inquirer
            Mail::to($data['email'])
                ->send(new ContactConfirmation($data));

            // Log successful submission
            Log::info('Contact form submitted successfully', [
                'email' => $data['email'],
                'inquiry_type' => $data['inquiry_type'],
                'name' => $data['name']
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Thank you for your inquiry! I\'ll respond within 24-48 hours.',
                'inquiry_type' => $data['inquiry_type_label']
            ], 200);

        } catch (\Exception $e) {
            Log::error('Contact form submission failed', [
                'error' => $e->getMessage(),
                'email' => $request->input('email'),
                'inquiry_type' => $request->input('inquiry_type')
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Sorry, there was an error sending your message. Please try again or email me directly.',
                'error' => config('app.debug') ? $e->getMessage() : null
            ], 500);
        }
    }

    /**
     * Get human-readable inquiry type label
     */
    private function getInquiryTypeLabel($type)
    {
        $labels = [
            'speaking' => 'Speaking Engagement',
            'partnership' => 'Business Partnership',
            'media' => 'Media Inquiry',
            'general' => 'General Networking'
        ];

        return $labels[$type] ?? 'General Inquiry';
    }
}
