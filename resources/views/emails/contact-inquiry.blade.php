<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New {{ $inquiryTypeLabel }} Inquiry</title>
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
            padding: 30px;
            text-align: center;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
            font-weight: 700;
        }

        .badge {
            display: inline-block;
            background: rgba(255, 255, 255, 0.2);
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 10px;
        }

        .content {
            padding: 30px;
        }

        .inquiry-details {
            background: #f3f4f6;
            border-radius: 8px;
            padding: 20px;
            margin: 20px 0;
        }

        .detail-row {
            display: flex;
            padding: 8px 0;
            border-bottom: 1px solid #e5e7eb;
        }

        .detail-row:last-child {
            border-bottom: none;
        }

        .detail-label {
            font-weight: 600;
            color: #4b5563;
            min-width: 140px;
        }

        .detail-value {
            color: #1f2937;
            flex: 1;
        }

        .message-section {
            background: #fef7ff;
            border-left: 4px solid #ea580c;
            padding: 20px;
            margin: 20px 0;
            border-radius: 0 8px 8px 0;
        }

        .message-label {
            font-weight: 600;
            color: #ea580c;
            margin-bottom: 10px;
        }

        .priority-high {
            background: #fee2e2;
            color: #dc2626;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            display: inline-block;
            margin-bottom: 15px;
        }

        .footer {
            background: #f9fafb;
            padding: 20px 30px;
            text-align: center;
            font-size: 14px;
            color: #6b7280;
        }

        .cta-button {
            display: inline-block;
            background: linear-gradient(135deg, #ea580c 0%, #dc2626 100%);
            color: white;
            text-decoration: none;
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: 600;
            margin: 15px 0;
        }

        @media (max-width: 600px) {
            .container {
                margin: 10px;
            }

            .header,
            .content,
            .footer {
                padding: 20px;
            }

            .detail-row {
                flex-direction: column;
            }

            .detail-label {
                min-width: auto;
                margin-bottom: 4px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <div class="badge">New Website Inquiry</div>
            <h1>{{ $inquiryTypeLabel }}</h1>
            <p style="margin: 10px 0 0 0; opacity: 0.9;">From violetkaponda.com contact form</p>
        </div>

        <!-- Content -->
        <div class="content">
            @if ($inquiryType === 'speaking' && isset($data['event_date']) && $data['event_date'])
                <div class="priority-high">
                    ⚡ Time-Sensitive: Event Date Specified
                </div>
            @endif

            <!-- Contact Information -->
            <div class="inquiry-details">
                <h3 style="margin-top: 0; color: #1f2937;">Contact Information</h3>

                <div class="detail-row">
                    <div class="detail-label">Name:</div>
                    <div class="detail-value"><strong>{{ $data['name'] }}</strong></div>
                </div>

                <div class="detail-row">
                    <div class="detail-label">Email:</div>
                    <div class="detail-value">
                        <a href="mailto:{{ $data['email'] }}" style="color: #ea580c;">{{ $data['email'] }}</a>
                    </div>
                </div>

                @if ($data['organization'])
                    <div class="detail-row">
                        <div class="detail-label">Organization:</div>
                        <div class="detail-value">{{ $data['organization'] }}</div>
                    </div>
                @endif

                @if ($data['role'])
                    <div class="detail-row">
                        <div class="detail-label">Role:</div>
                        <div class="detail-value">{{ $data['role'] }}</div>
                    </div>
                @endif

                <div class="detail-row">
                    <div class="detail-label">Submitted:</div>
                    <div class="detail-value">{{ $data['submitted_at'] }}</div>
                </div>
            </div>

            <!-- Inquiry-Specific Details -->
            @if ($inquiryType === 'speaking')
                <div class="inquiry-details">
                    <h3 style="margin-top: 0; color: #1f2937;">Speaking Engagement Details</h3>

                    @if (isset($data['event_date']) && $data['event_date'])
                        <div class="detail-row">
                            <div class="detail-label">Event Date:</div>
                            <div class="detail-value">
                                <strong>{{ \Carbon\Carbon::parse($data['event_date'])->format('F j, Y') }}</strong>
                            </div>
                        </div>
                    @endif

                    @if (isset($data['audience_size']) && $data['audience_size'])
                        <div class="detail-row">
                            <div class="detail-label">Audience Size:</div>
                            <div class="detail-value">{{ $data['audience_size'] }}</div>
                        </div>
                    @endif

                    @if (isset($data['speaking_topic']) && $data['speaking_topic'])
                        <div class="detail-row">
                            <div class="detail-label">Topic Interest:</div>
                            <div class="detail-value">{{ ucwords(str_replace('-', ' ', $data['speaking_topic'])) }}
                            </div>
                        </div>
                    @endif

                    @if (isset($data['event_format']) && $data['event_format'])
                        <div class="detail-row">
                            <div class="detail-label">Event Format:</div>
                            <div class="detail-value">{{ ucwords($data['event_format']) }}</div>
                        </div>
                    @endif
                </div>
            @elseif($inquiryType === 'partnership')
                <div class="inquiry-details">
                    <h3 style="margin-top: 0; color: #1f2937;">Partnership Details</h3>

                    @if (isset($data['partnership_type']) && $data['partnership_type'])
                        <div class="detail-row">
                            <div class="detail-label">Partnership Type:</div>
                            <div class="detail-value">{{ ucwords(str_replace('-', ' ', $data['partnership_type'])) }}
                            </div>
                        </div>
                    @endif

                    @if (isset($data['timeline']) && $data['timeline'])
                        <div class="detail-row">
                            <div class="detail-label">Timeline:</div>
                            <div class="detail-value">{{ ucwords(str_replace('-', ' ', $data['timeline'])) }}</div>
                        </div>
                    @endif

                    @if (isset($data['industry']) && $data['industry'])
                        <div class="detail-row">
                            <div class="detail-label">Industry:</div>
                            <div class="detail-value">{{ $data['industry'] }}</div>
                        </div>
                    @endif
                </div>
            @elseif($inquiryType === 'media')
                <div class="inquiry-details">
                    <h3 style="margin-top: 0; color: #1f2937;">Media Inquiry Details</h3>

                    @if (isset($data['media_type']) && $data['media_type'])
                        <div class="detail-row">
                            <div class="detail-label">Media Type:</div>
                            <div class="detail-value">{{ ucwords(str_replace('-', ' ', $data['media_type'])) }}</div>
                        </div>
                    @endif

                    @if (isset($data['publication']) && $data['publication'])
                        <div class="detail-row">
                            <div class="detail-label">Publication:</div>
                            <div class="detail-value">{{ $data['publication'] }}</div>
                        </div>
                    @endif

                    @if (isset($data['media_topic']) && $data['media_topic'])
                        <div class="detail-row">
                            <div class="detail-label">Topic/Angle:</div>
                            <div class="detail-value">{{ $data['media_topic'] }}</div>
                        </div>
                    @endif
                </div>
            @elseif($inquiryType === 'general')
                <div class="inquiry-details">
                    <h3 style="margin-top: 0; color: #1f2937;">General Inquiry Details</h3>

                    @if (isset($data['general_help']) && $data['general_help'])
                        <div class="detail-row">
                            <div class="detail-label">Help Needed:</div>
                            <div class="detail-value">{{ ucwords($data['general_help']) }}</div>
                        </div>
                    @endif

                    @if (isset($data['background']) && $data['background'])
                        <div class="detail-row">
                            <div class="detail-label">Background:</div>
                            <div class="detail-value">{{ $data['background'] }}</div>
                        </div>
                    @endif
                </div>
            @endif

            <!-- Message -->
            <div class="message-section">
                <div class="message-label">Message from {{ $data['name'] }}:</div>
                <div style="white-space: pre-line;">{{ $data['message'] }}</div>
            </div>

            <!-- Quick Actions -->
            <div style="text-align: center; margin: 30px 0;">
                <a href="mailto:{{ $data['email'] }}?subject=Re: {{ $inquiryTypeLabel }} Inquiry" class="cta-button">
                    Reply to {{ $data['name'] }}
                </a>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p>This inquiry was submitted through the contact form at <strong>violetkaponda.com</strong></p>
            <p style="margin: 0; font-size: 12px; color: #9ca3af;">
                Auto-confirmation sent to {{ $data['email'] }}
            </p>
        </div>
    </div>
</body>

</html>
