<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class NewsletterController extends Controller
{
    /**
     * Handle newsletter subscription
     */
    public function subscribe(Request $request)
    {
        try {
            // Validate email
            $validator = Validator::make($request->all(), [
                'email' => 'required|email|max:255',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Please provide a valid email address.',
                    'errors' => $validator->errors()
                ], 422);
            }

            $email = $request->input('email');

            // Simple email notification to Violet (using raw email)
            Mail::raw("New newsletter subscription from: {$email}\nSubscribed at: " . now(), function ($message) use ($email) {
                $message->to(config('mail.contact_email', 'clivetlungu1@gmail.com'))
                    ->subject('New Newsletter Subscription - violetkaponda.com')
                    ->replyTo($email);
            });

            // Simple welcome email to subscriber
            Mail::raw("Welcome to Violet's Newsletter!\n\nThank you for subscribing! You'll receive exclusive fintech insights and updates from the African Fintech Queen.\n\nBest regards,\nViolet Nswana Kaponda", function ($message) use ($email) {
                $message->to($email)
                    ->subject('Welcome to Violet\'s Exclusive Fintech Insights!')
                    ->from(config('mail.from.address', 'clivetlungu1@gmail.com'), 'Violet Nswana Kaponda');
            });

            // Log successful subscription
            Log::info('Newsletter subscription', [
                'email' => $email,
                'ip' => $request->ip(),
                'timestamp' => now()
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Welcome to the community! Check your email for confirmation.'
            ], 200);
        } catch (\Exception $e) {
            Log::error('Newsletter subscription failed', [
                'error' => $e->getMessage(),
                'email' => $request->input('email')
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Subscription failed. Please try again.',
                'error' => config('app.debug') ? $e->getMessage() : null
            ], 500);
        }
    }
}
