<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank you for contacting Violet Nswana Kaponda</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            line-height: 1.6;
            color: #374151;
            background-color: #f9fafb;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }

        .header {
            background: linear-gradient(135deg, #ea580c 0%, #dc2626 100%);
            color: white;
            padding: 40px 30px;
            text-align: center;
        }

        .header h1 {
            margin: 0 0 10px 0;
            font-size: 28px;
            font-weight: 700;
        }

        .header p {
            margin: 0;
            opacity: 0.9;
            font-size: 16px;
        }

        .content {
            padding: 40px 30px;
        }

        .greeting {
            font-size: 18px;
            margin-bottom: 20px;
            color: #1f2937;
        }

        .inquiry-summary {
            background: #f3f4f6;
            border-radius: 8px;
            padding: 20px;
            margin: 25px 0;
            border-left: 4px solid #ea580c;
        }

        .inquiry-summary h3 {
            margin: 0 0 10px 0;
            color: #ea580c;
            font-size: 16px;
            font-weight: 600;
        }

        .next-steps {
            background: #ecfdf5;
            border: 1px solid #d1fae5;
            border-radius: 8px;
            padding: 20px;
            margin: 25px 0;
        }

        .next-steps h3 {
            margin: 0 0 15px 0;
            color: #065f46;
            display: flex;
            align-items: center;
            font-size: 16px;
        }

        .next-steps ul {
            margin: 0;
            padding-left: 20px;
            color: #047857;
        }

        .next-steps li {
            margin-bottom: 8px;
        }

        .timeline {
            background: linear-gradient(135deg, #fef3c7, #fed7aa);
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            margin: 25px 0;
        }

        .timeline-number {
            font-size: 32px;
            font-weight: 800;
            color: #92400e;
            display: block;
        }

        .timeline-text {
            color: #92400e;
            font-weight: 600;
            margin: 5px 0;
        }

        .social-links {
            text-align: center;
            margin: 30px 0;
            padding: 25px;
            background: #f9fafb;
            border-radius: 8px;
        }

        .social-links h3 {
            margin: 0 0 15px 0;
            color: #4b5563;
            font-size: 16px;
        }

        .social-button {
            display: inline-block;
            margin: 5px 10px;
            padding: 8px 16px;
            background: white;
            color: #4b5563;
            text-decoration: none;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 500;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .social-button:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
        }

        .linkedin {
            color: #0077b5;
        }

        .youtube {
            color: #ff0000;
        }

        .tiktok {
            color: #000000;
        }

        .footer {
            background: #f9fafb;
            padding: 25px 30px;
            text-align: center;
            border-top: 1px solid #e5e7eb;
        }

        .signature {
            font-style: italic;
            color: #6b7280;
            margin-top: 15px;
        }

        @media (max-width: 600px) {
            .container {
                margin: 10px;
            }

            .header,
            .content,
            .footer {
                padding: 25px 20px;
            }

            .social-button {
                display: block;
                margin: 8px 0;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <h1>Thank You, {{ $name }}!</h1>
            <p>Your {{ strtolower($inquiryTypeLabel) }} inquiry has been received</p>
        </div>

        <!-- Content -->
        <div class="content">
            <div class="greeting">
                Hello {{ $name }},
            </div>

            <p>Thank you for reaching out through my website! I'm excited to connect and learn more about how we can
                work together to drive meaningful impact across Africa's fintech ecosystem.</p>

            <!-- Inquiry Summary -->
            <div class="inquiry-summary">
                <h3>Your Inquiry Summary</h3>
                <strong>Type:</strong> {{ $inquiryTypeLabel }}<br>
                <strong>Submitted:</strong>
                {{ \Carbon\Carbon::parse($data['submitted_at'])->format('F j, Y \a\t g:i A') }}<br>
                @if ($data['organization'])
                    <strong>Organization:</strong> {{ $data['organization'] }}<br>
                @endif

                @if ($inquiryType === 'speaking' && isset($data['event_date']) && $data['event_date'])
                    <strong>Event Date:</strong> {{ \Carbon\Carbon::parse($data['event_date'])->format('F j, Y') }}<br>
                @endif
            </div>

            <!-- Response Timeline -->
            <div class="timeline">
                <span class="timeline-number">24-48</span>
                <div class="timeline-text">Hours Response Time</div>
                <p style="margin: 10px 0 0 0; font-size: 14px; color: #92400e;">
                    I personally review and respond to every inquiry
                </p>
            </div>

            <!-- Next Steps -->
            <div class="next-steps">
                <h3>
                    <span style="margin-right: 8px;">✅</span>
                    What Happens Next
                </h3>
                <ul>
                    <li><strong>I'll review your inquiry</strong> and any specific requirements you've mentioned</li>
                    @if ($inquiryType === 'speaking')
                        <li><strong>For speaking engagements:</strong> I'll send you a detailed proposal with
                            availability, topics, and logistics</li>
                    @elseif($inquiryType === 'partnership')
                        <li><strong>For partnerships:</strong> I'll schedule a consultation call to discuss your
                            specific needs and objectives</li>
                    @elseif($inquiryType === 'media')
                        <li><strong>For media inquiries:</strong> I'll provide my media kit and confirm my availability
                            for interviews</li>
                    @else
                        <li><strong>For general inquiries:</strong> I'll connect personally to understand how I can best
                            assist you</li>
                    @endif
                    <li><strong>I'll respond directly</strong> to your email with personalized next steps</li>
                    <li><strong>We'll coordinate</strong> the best way to move forward together</li>
                </ul>
            </div>

            @if ($inquiryType === 'speaking')
                <div
                    style="background: #eff6ff; border: 1px solid #bfdbfe; border-radius: 8px; padding: 20px; margin: 25px 0;">
                    <h3 style="margin: 0 0 10px 0; color: #1e40af; font-size: 16px;">
                        🎤 Speaking Engagement Info
                    </h3>
                    <p style="margin: 0; color: #1e3a8a; font-size: 14px;">
                        I speak on fintech innovation, women in technology, digital transformation, business
                        development, and mindset coaching.
                        Every presentation is customized to your audience and objectives.
                    </p>
                </div>
            @endif

            <!-- Social Media Follow -->
            <div class="social-links">
                <h3>Stay Connected While You Wait</h3>
                <p style="margin: 0 0 15px 0; color: #6b7280; font-size: 14px;">
                    Follow my latest insights and updates on social media:
                </p>
                <a href="https://linkedin.com/in/violet-nswana-kaponda-bsc-msc-a2761a153" class="social-button linkedin"
                    target="_blank">
                    LinkedIn - Professional Updates
                </a>
                <a href="https://youtube.com/@elevateanddominate" class="social-button youtube" target="_blank">
                    YouTube - Elevate & Dominate
                </a>
                <a href="https://tiktok.com/@violetkaponda" class="social-button tiktok" target="_blank">
                    TikTok - Quick Tips
                </a>
            </div>

            <p>If you have any urgent questions or need to modify your inquiry, feel free to reply directly to this
                email.</p>

            <p style="margin-bottom: 0;">Looking forward to our conversation!</p>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p style="margin: 0 0 10px 0; font-weight: 600; color: #1f2937;">
                Violet Nswana Kaponda
            </p>
            <p style="margin: 0 0 15px 0; color: #6b7280; font-size: 14px;">
                African Fintech Queen | Business Development Strategist | International Speaker
            </p>
            <p style="margin: 0; font-size: 12px; color: #9ca3af;">
                Probase Group, Lusaka, Zambia<br>
                <a href="mailto:violet@violetkaponda.com" style="color: #ea580c;">violet@violetkaponda.com</a> |
                <a href="https://violetkaponda.com" style="color: #ea580c;">violetkaponda.com</a>
            </p>

            <div class="signature">
                "Building Africa's Digital Future, One Connection at a Time"
            </div>
        </div>
    </div>
</body>

</html>
