@extends('layouts.app')

@section('title', 'Terms of Service - Violet Nswana Kaponda')
@section('description', 'Terms of Service for Violet Nswana Kaponda\'s website. Please read these terms carefully before
    using our services.')

@section('content')
    <div class="min-h-screen bg-gray-50 py-20">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="text-center mb-16">
                <h1 class="text-4xl font-display font-bold text-gray-900 mb-4">Terms of Service</h1>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Please read these terms carefully before using our website and services.
                </p>
                <div class="mt-6 text-sm text-gray-500">
                    <p>Last updated: {{ date('F j, Y') }}</p>
                </div>
            </div>

            <!-- Content -->
            <div class="bg-white rounded-2xl shadow-lg p-8 lg:p-12">
                <div class="prose prose-lg max-w-none">

                    <h2 class="text-2xl font-bold text-gray-900 mb-6">1. Acceptance of Terms</h2>
                    <p class="text-gray-600 mb-8">By accessing and using this website (violetkaponda.com), you accept and
                        agree to be bound by the terms and provision of this agreement. If you do not agree to abide by the
                        above, please do not use this service.</p>

                    <h2 class="text-2xl font-bold text-gray-900 mb-6">2. Description of Service</h2>
                    <p class="text-gray-600 mb-6">Violet Nswana Kaponda provides:</p>
                    <ul class="text-gray-600 mb-8 space-y-2">
                        <li>• <strong>Thought Leadership:</strong> Insights and content on fintech and digital
                            transformation</li>
                        <li>• <strong>Speaking Services:</strong> Professional speaking engagements and presentations</li>
                        <li>• <strong>Consulting Services:</strong> Strategic consulting for fintech and digital
                            transformation</li>
                        <li>• <strong>Educational Content:</strong> Blog posts, articles, and industry insights</li>
                        <li>• <strong>Networking:</strong> Professional networking and partnership opportunities</li>
                    </ul>

                    <h2 class="text-2xl font-bold text-gray-900 mb-6">3. User Responsibilities</h2>
                    <p class="text-gray-600 mb-6">As a user of this website, you agree to:</p>
                    <ul class="text-gray-600 mb-8 space-y-2">
                        <li>• Provide accurate and truthful information when contacting us</li>
                        <li>• Use the website for lawful purposes only</li>
                        <li>• Respect intellectual property rights</li>
                        <li>• Not engage in any activity that could harm or disrupt the website</li>
                        <li>• Not attempt to gain unauthorized access to any part of the website</li>
                    </ul>

                    <h2 class="text-2xl font-bold text-gray-900 mb-6">4. Intellectual Property Rights</h2>
                    <p class="text-gray-600 mb-6">All content on this website, including but not limited to:</p>
                    <ul class="text-gray-600 mb-6 space-y-2">
                        <li>• Text, graphics, logos, images, and software</li>
                        <li>• Blog posts, articles, and thought leadership content</li>
                        <li>• Design elements and website structure</li>
                        <li>• Videos, presentations, and multimedia content</li>
                    </ul>
                    <p class="text-gray-600 mb-8">Is the property of Violet Nswana Kaponda and is protected by copyright,
                        trademark, and other intellectual property laws. You may not reproduce, distribute, or create
                        derivative works without explicit written permission.</p>

                    <h2 class="text-2xl font-bold text-gray-900 mb-6">5. Professional Services</h2>

                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Speaking Engagements</h3>
                    <ul class="text-gray-600 mb-6 space-y-2">
                        <li>• All speaking engagements are subject to separate agreements</li>
                        <li>• Availability is not guaranteed and subject to scheduling</li>
                        <li>• Cancellation policies will be outlined in individual agreements</li>
                        <li>• Travel and accommodation requirements apply for international events</li>
                    </ul>

                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Consulting Services</h3>
                    <ul class="text-gray-600 mb-8 space-y-2">
                        <li>• Consulting services are provided under separate service agreements</li>
                        <li>• Confidentiality agreements may be required</li>
                        <li>• Payment terms and deliverables will be specified in contracts</li>
                        <li>• Results are not guaranteed and depend on various factors</li>
                    </ul>

                    <h2 class="text-2xl font-bold text-gray-900 mb-6">6. Website Use and Limitations</h2>
                    <p class="text-gray-600 mb-6">You agree not to:</p>
                    <ul class="text-gray-600 mb-8 space-y-2">
                        <li>• Use the website for any illegal or unauthorized purpose</li>
                        <li>• Transmit any viruses, malware, or harmful code</li>
                        <li>• Attempt to gain unauthorized access to our systems</li>
                        <li>• Interfere with other users' access to the website</li>
                        <li>• Harvest or collect email addresses or other contact information</li>
                        <li>• Use automated systems to access the website</li>
                    </ul>

                    <h2 class="text-2xl font-bold text-gray-900 mb-6">7. Privacy and Data Protection</h2>
                    <p class="text-gray-600 mb-8">Your privacy is important to us. Please review our <a
                            href="{{ route('privacy') }}" class="text-brand-orange hover:underline">Privacy Policy</a> to
                        understand how we collect, use, and protect your information. By using this website, you consent to
                        our privacy practices as described in our Privacy Policy.</p>

                    <h2 class="text-2xl font-bold text-gray-900 mb-6">8. Disclaimers and Limitations</h2>

                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Content Disclaimer</h3>
                    <p class="text-gray-600 mb-6">The information on this website is provided for general informational
                        purposes only. While we strive for accuracy, we make no representations or warranties about the
                        completeness, accuracy, or reliability of any information.</p>

                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Professional Advice</h3>
                    <p class="text-gray-600 mb-6">Content on this website does not constitute professional, legal,
                        financial, or business advice. Always consult with qualified professionals for specific advice
                        related to your situation.</p>

                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Limitation of Liability</h3>
                    <p class="text-gray-600 mb-8">In no event shall Violet Nswana Kaponda be liable for any indirect,
                        incidental, special, or consequential damages arising from your use of this website or services,
                        even if advised of the possibility of such damages.</p>

                    <h2 class="text-2xl font-bold text-gray-900 mb-6">9. Third-Party Links and Services</h2>
                    <p class="text-gray-600 mb-8">This website may contain links to third-party websites and services. We
                        are not responsible for the content, privacy practices, or terms of service of these external sites.
                        Your interactions with third-party services are subject to their own terms and conditions.</p>

                    <h2 class="text-2xl font-bold text-gray-900 mb-6">10. Termination</h2>
                    <p class="text-gray-600 mb-8">We reserve the right to terminate or suspend access to our website
                        immediately, without prior notice or liability, for any reason whatsoever, including without
                        limitation if you breach the Terms.</p>

                    <h2 class="text-2xl font-bold text-gray-900 mb-6">11. Governing Law</h2>
                    <p class="text-gray-600 mb-8">These Terms shall be interpreted and governed in accordance with the laws
                        of Zambia. Any disputes arising from these terms or use of the website shall be subject to the
                        jurisdiction of Zambian courts.</p>

                    <h2 class="text-2xl font-bold text-gray-900 mb-6">12. Changes to Terms</h2>
                    <p class="text-gray-600 mb-8">We reserve the right to update or change these Terms of Service at any
                        time without prior notice. Your continued use of the website after any changes constitutes
                        acceptance of those changes. We encourage you to review these Terms periodically.</p>

                    <h2 class="text-2xl font-bold text-gray-900 mb-6">13. Contact Information</h2>
                    <p class="text-gray-600 mb-4">If you have any questions about these Terms of Service, please contact us:
                    </p>
                    <div class="bg-gray-50 p-6 rounded-lg">
                        <p class="text-gray-600 mb-2"><strong>Email:</strong> legal@violetkaponda.com</p>
                        <p class="text-gray-600 mb-2"><strong>Website:</strong> <a href="{{ route('contact') }}"
                                class="text-brand-orange hover:underline">Contact Form</a></p>
                        <p class="text-gray-600"><strong>Business Address:</strong> Lusaka, Zambia</p>
                    </div>

                    <div class="mt-8 p-6 bg-brand-orange bg-opacity-10 rounded-lg border-l-4 border-brand-orange">
                        <p class="text-gray-700 font-medium">
                            <strong>Important:</strong> By using this website, you acknowledge that you have read,
                            understood, and agree to be bound by these Terms of Service.
                        </p>
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
