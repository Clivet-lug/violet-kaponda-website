<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Newsletter Subscription</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            line-height: 1.6;
            color: #374151;
            background-color: #f9fafb;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }

        .header {
            background: linear-gradient(135deg, #ea580c 0%, #dc2626 100%);
            color: white;
            padding: 30px;
            text-align: center;
        }

        .content {
            padding: 30px;
        }

        .detail-row {
            padding: 8px 0;
            border-bottom: 1px solid #e5e7eb;
        }

        .detail-row:last-child {
            border-bottom: none;
        }

        .footer {
            background: #f9fafb;
            padding: 20px;
            text-align: center;
            font-size: 14px;
            color: #6b7280;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1 style="margin: 0;">📧 New Newsletter Subscriber</h1>
            <p style="margin: 10px 0 0 0; opacity: 0.9;">violetkaponda.com</p>
        </div>

        <div class="content">
            <h3 style="color: #1f2937; margin-top: 0;">Subscription Details</h3>

            <div class="detail-row">
                <strong>Email:</strong> {{ $data['email'] }}
            </div>

            <div class="detail-row">
                <strong>Subscribed:</strong>
                {{ \Carbon\Carbon::parse($data['subscribed_at'])->format('F j, Y \a\t g:i A') }}
            </div>

            <div class="detail-row">
                <strong>IP Address:</strong> {{ $data['ip_address'] }}
            </div>
        </div>

        <div class="footer">
            <p style="margin: 0;">Auto-notification from violetkaponda.com</p>
        </div>
    </div>
</body>

</html>

{{-- resources/views/emails/newsletter-welcome.blade.php --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Violet's Newsletter</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
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

        .content {
            padding: 40px 30px;
        }

        .welcome-box {
            background: #f3f4f6;
            border-radius: 8px;
            padding: 20px;
            margin: 25px 0;
            border-left: 4px solid #ea580c;
        }

        .social-links {
            text-align: center;
            margin: 30px 0;
            padding: 25px;
            background: #f9fafb;
            border-radius: 8px;
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
        }

        .footer {
            background: #f9fafb;
            padding: 25px 30px;
            text-align: center;
            border-top: 1px solid #e5e7eb;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1 style="margin: 0 0 10px 0;">🎉 Welcome to the Community!</h1>
            <p style="margin: 0; opacity: 0.9; font-size: 16px;">
                Thank you for joining Violet's exclusive fintech insights
            </p>
        </div>

        <div class="content">
            <div style="font-size: 18px; margin-bottom: 20px;">
                Hello there! 👋
            </div>

            <p>Thank you for subscribing to my newsletter! I'm thrilled to have you join our community of
                forward-thinking professionals who are passionate about Africa's fintech future.</p>

            <div class="welcome-box">
                <h3 style="margin: 0 0 10px 0; color: #ea580c;">What to Expect</h3>
                <ul style="margin: 0; padding-left: 20px; color: #047857;">
                    <li>Exclusive insights on African fintech trends and opportunities</li>
                    <li>Behind-the-scenes updates from my work at Probase Group</li>
                    <li>Speaking event announcements and early access</li>
                    <li>Practical tips for career growth in tech and business development</li>
                    <li>Curated content from "Elevate & Dominate" podcast highlights</li>
                </ul>
            </div>

            <p>I'll be sharing valuable content that you won't find anywhere else - from strategic insights on digital
                transformation to practical advice on building limitless careers in tech.</p>

            <div class="social-links">
                <h3 style="margin: 0 0 15px 0; color: #4b5563;">Stay Connected</h3>
                <p style="margin: 0 0 15px 0; color: #6b7280; font-size: 14px;">
                    Follow me on social media for daily insights:
                </p>
                <a href="https://linkedin.com/in/violet-nswana-kaponda-bsc-msc-a2761a153" class="social-button"
                    target="_blank">
                    LinkedIn
                </a>
                <a href="https://youtube.com/@elevateanddominate" class="social-button" target="_blank">
                    YouTube
                </a>
                <a href="https://tiktok.com/@violetkaponda" class="social-button" target="_blank">
                    TikTok
                </a>
            </div>

            <p>Your first newsletter will arrive soon, packed with actionable insights to help you thrive in today's
                digital economy.</p>

            <p style="margin-bottom: 0;">Let's build Africa's digital future together!</p>
        </div>

        <div class="footer">
            <p style="margin: 0 0 10px 0; font-weight: 600; color: #1f2937;">
                Violet Nswana Kaponda
            </p>
            <p style="margin: 0 0 15px 0; color: #6b7280; font-size: 14px;">
                African Fintech Queen | Business Development Strategist | International Speaker
            </p>
            <p style="margin: 0; font-size: 12px; color: #9ca3af;">
                violetkaponda.com | "Building Africa's Digital Future, One Connection at a Time"
            </p>
        </div>
    </div>
</body>

</html>

{{-- resources/views/emails/newsletter-subscription-text.blade.php --}}
NEW NEWSLETTER SUBSCRIPTION
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

Email: {{ $data['email'] }}
Subscribed: {{ \Carbon\Carbon::parse($data['subscribed_at'])->format('F j, Y \a\t g:i A') }}
IP Address: {{ $data['ip_address'] }}

Auto-notification from violetkaponda.com

{{-- resources/views/emails/newsletter-welcome-text.blade.php --}}
WELCOME TO VIOLET'S NEWSLETTER!
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

Hello there! 👋

Thank you for subscribing to my newsletter! I'm thrilled to have you join our community of forward-thinking
professionals who are passionate about Africa's fintech future.

WHAT TO EXPECT:
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
• Exclusive insights on African fintech trends and opportunities
• Behind-the-scenes updates from my work at Probase Group
• Speaking event announcements and early access
• Practical tips for career growth in tech and business development
• Curated content from "Elevate & Dominate" podcast highlights

STAY CONNECTED:
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
• LinkedIn: https://linkedin.com/in/violet-nswana-kaponda-bsc-msc-a2761a153
• YouTube: https://youtube.com/@elevateanddominate
• TikTok: https://tiktok.com/@violetkaponda

Your first newsletter will arrive soon, packed with actionable insights to help you thrive in today's digital economy.

Let's build Africa's digital future together!

Best regards,

Violet Nswana Kaponda
African Fintech Queen | Business Development Strategist | International Speaker
violetkaponda.com | "Building Africa's Digital Future, One Connection at a Time"
