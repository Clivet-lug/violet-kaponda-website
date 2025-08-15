@extends('layouts.app')

@section('title', 'Privacy Policy - Violet Nswana Kaponda')
@section('description', 'Privacy Policy for Violet Nswana Kaponda\'s website. Learn how we collect, use, and protect
    your personal information.')

@section('content')
    <div class="min-h-screen bg-gray-50 py-20">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="text-center mb-16">
                <h1 class="text-4xl font-display font-bold text-gray-900 mb-4">Privacy Policy</h1>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Your privacy is important to us. This policy explains how we collect, use, and protect your information.
                </p>
                <div class="mt-6 text-sm text-gray-500">
                    <p>Last updated: {{ date('F j, Y') }}</p>
                </div>
            </div>

            <!-- Content -->
            <div class="bg-white rounded-2xl shadow-lg p-8 lg:p-12">
                <div class="prose prose-lg max-w-none">

                    <h2 class="text-2xl font-bold text-gray-900 mb-6">1. Information We Collect</h2>

                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Personal Information</h3>
                    <p class="text-gray-600 mb-6">We may collect the following personal information when you interact with
                        our website:</p>
                    <ul class="text-gray-600 mb-6 space-y-2">
                        <li>• <strong>Contact Information:</strong> Name, email address, phone number</li>
                        <li>• <strong>Professional Information:</strong> Company name, job title, professional interests
                        </li>
                        <li>• <strong>Communication Data:</strong> Messages sent through our contact forms</li>
                        <li>• <strong>Newsletter Data:</strong> Email address for newsletter subscriptions</li>
                    </ul>

                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Automatically Collected Information</h3>
                    <ul class="text-gray-600 mb-8 space-y-2">
                        <li>• <strong>Usage Data:</strong> Pages visited, time spent, click patterns</li>
                        <li>• <strong>Device Information:</strong> Browser type, operating system, device type</li>
                        <li>• <strong>Location Data:</strong> General geographic location based on IP address</li>
                    </ul>

                    <h2 class="text-2xl font-bold text-gray-900 mb-6">2. How We Use Your Information</h2>
                    <p class="text-gray-600 mb-6">We use your information for the following purposes:</p>
                    <ul class="text-gray-600 mb-8 space-y-2">
                        <li>• <strong>Communication:</strong> Respond to inquiries and provide customer support</li>
                        <li>• <strong>Newsletter:</strong> Send you updates, insights, and industry news</li>
                        <li>• <strong>Website Improvement:</strong> Analyze usage patterns to enhance user experience</li>
                        <li>• <strong>Professional Services:</strong> Provide consulting and speaking services</li>
                        <li>• <strong>Legal Compliance:</strong> Meet legal obligations and protect our rights</li>
                    </ul>

                    <h2 class="text-2xl font-bold text-gray-900 mb-6">3. Information Sharing</h2>
                    <p class="text-gray-600 mb-6">We do not sell, trade, or rent your personal information. We may share
                        information in these limited circumstances:</p>
                    <ul class="text-gray-600 mb-8 space-y-2">
                        <li>• <strong>Service Providers:</strong> Trusted third parties who assist with website operations
                        </li>
                        <li>• <strong>Legal Requirements:</strong> When required by law or to protect our rights</li>
                        <li>• <strong>Business Transfers:</strong> In the event of a merger or acquisition</li>
                        <li>• <strong>Consent:</strong> When you have given explicit permission</li>
                    </ul>

                    <h2 class="text-2xl font-bold text-gray-900 mb-6">4. Data Security</h2>
                    <p class="text-gray-600 mb-8">We implement appropriate security measures to protect your personal
                        information, including encryption, secure servers, and access controls. However, no internet
                        transmission is 100% secure, and we cannot guarantee absolute security.</p>

                    <h2 class="text-2xl font-bold text-gray-900 mb-6">5. Your Rights</h2>
                    <p class="text-gray-600 mb-6">You have the following rights regarding your personal information:</p>
                    <ul class="text-gray-600 mb-8 space-y-2">
                        <li>• <strong>Access:</strong> Request a copy of your personal information</li>
                        <li>• <strong>Correction:</strong> Update or correct inaccurate information</li>
                        <li>• <strong>Deletion:</strong> Request deletion of your personal information</li>
                        <li>• <strong>Unsubscribe:</strong> Opt out of newsletter communications</li>
                        <li>• <strong>Portability:</strong> Request transfer of your data</li>
                    </ul>

                    <h2 class="text-2xl font-bold text-gray-900 mb-6">6. Cookies and Tracking</h2>
                    <p class="text-gray-600 mb-6">We use cookies and similar technologies to:</p>
                    <ul class="text-gray-600 mb-8 space-y-2">
                        <li>• Remember your preferences and settings</li>
                        <li>• Analyze website traffic and user behavior</li>
                        <li>• Improve website functionality and performance</li>
                        <li>• Provide personalized content and experiences</li>
                    </ul>

                    <h2 class="text-2xl font-bold text-gray-900 mb-6">7. Third-Party Services</h2>
                    <p class="text-gray-600 mb-6">Our website may include links to third-party services. We use:</p>
                    <ul class="text-gray-600 mb-8 space-y-2">
                        <li>• <strong>Google Analytics:</strong> For website analytics and insights</li>
                        <li>• <strong>Social Media Platforms:</strong> For content sharing and engagement</li>
                        <li>• <strong>Email Services:</strong> For newsletter delivery and communications</li>
                    </ul>

                    <h2 class="text-2xl font-bold text-gray-900 mb-6">8. Data Retention</h2>
                    <p class="text-gray-600 mb-8">We retain your personal information only as long as necessary to fulfill
                        the purposes outlined in this policy, comply with legal obligations, and resolve disputes.</p>

                    <h2 class="text-2xl font-bold text-gray-900 mb-6">9. International Transfers</h2>
                    <p class="text-gray-600 mb-8">Your information may be transferred to and processed in countries other
                        than your own. We ensure appropriate safeguards are in place to protect your information during such
                        transfers.</p>

                    <h2 class="text-2xl font-bold text-gray-900 mb-6">10. Children's Privacy</h2>
                    <p class="text-gray-600 mb-8">Our website is not directed to children under 13, and we do not knowingly
                        collect personal information from children under 13. If we discover we have collected such
                        information, we will promptly delete it.</p>

                    <h2 class="text-2xl font-bold text-gray-900 mb-6">11. Changes to This Policy</h2>
                    <p class="text-gray-600 mb-8">We may update this privacy policy from time to time. We will notify you of
                        any changes by posting the new policy on this page and updating the "Last Updated" date.</p>

                    <h2 class="text-2xl font-bold text-gray-900 mb-6">12. Contact Us</h2>
                    <p class="text-gray-600 mb-4">If you have any questions about this Privacy Policy, please contact us:
                    </p>
                    <div class="bg-gray-50 p-6 rounded-lg">
                        <p class="text-gray-600 mb-2"><strong>Email:</strong> privacy@violetkaponda.com</p>
                        <p class="text-gray-600 mb-2"><strong>Website:</strong> <a href="{{ route('contact') }}"
                                class="text-brand-orange hover:underline">Contact Form</a></p>
                        <p class="text-gray-600"><strong>Response Time:</strong> We aim to respond within 48 hours</p>
                    </div>
                </div>
            </div>

            <!-- Back to Home -->
            <div class="text-center mt-12">
                <a href="{{ route('home') }}"
                    class="inline-flex items-center space-x-2 text-brand-orange hover:text-brand-red transition-colors duration-300">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    <span class="font-medium">Back to Home</span>
                </a>
            </div>
        </div>
    </div>
@endsection
