NEW {{ strtoupper($inquiryTypeLabel) }} INQUIRY
From: violetkaponda.com contact form

━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

CONTACT INFORMATION:
Name: {{ $data['name'] }}
Email: {{ $data['email'] }}
@if(isset($data['organization']) && $data['organization'])
Organization: {{ $data['organization'] }}
@endif
@if(isset($data['role']) && $data['role'])
Role: {{ $data['role'] }}
@endif
Submitted: {{ $data['submitted_at'] }}

@if($inquiryType === 'speaking')
SPEAKING ENGAGEMENT DETAILS:
@if(isset($data['event_date']) && $data['event_date'])
Event Date: {{ \Carbon\Carbon::parse($data['event_date'])->format('F j, Y') }}
@endif
@if(isset($data['audience_size']) && $data['audience_size'])
Audience Size: {{ $data['audience_size'] }}
@endif
@if(isset($data['speaking_topic']) && $data['speaking_topic'])
Topic Interest: {{ ucwords(str_replace('-', ' ', $data['speaking_topic'])) }}
@endif
@if(isset($data['event_format']) && $data['event_format'])
Event Format: {{ ucwords($data['event_format']) }}
@endif
@elseif($inquiryType === 'partnership')
PARTNERSHIP DETAILS:
@if(isset($data['partnership_type']) && $data['partnership_type'])
Partnership Type: {{ ucwords(str_replace('-', ' ', $data['partnership_type'])) }}
@endif
@if(isset($data['timeline']) && $data['timeline'])
Timeline: {{ ucwords(str_replace('-', ' ', $data['timeline'])) }}
@endif
@if(isset($data['industry']) && $data['industry'])
Industry: {{ $data['industry'] }}
@endif
@elseif($inquiryType === 'media')
MEDIA INQUIRY DETAILS:
@if(isset($data['media_type']) && $data['media_type'])
Media Type: {{ ucwords(str_replace('-', ' ', $data['media_type'])) }}
@endif
@if(isset($data['publication']) && $data['publication'])
Publication: {{ $data['publication'] }}
@endif
@if(isset($data['media_topic']) && $data['media_topic'])
Topic/Angle: {{ $data['media_topic'] }}
@endif
@elseif($inquiryType === 'general')
GENERAL INQUIRY DETAILS:
@if(isset($data['general_help']) && $data['general_help'])
Help Needed: {{ ucwords($data['general_help']) }}
@endif
@if(isset($data['background']) && $data['background'])
Background: {{ $data['background'] }}
@endif
@endif

MESSAGE FROM {{ strtoupper($data['name']) }}:
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
{{ $data['message'] }}
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

QUICK ACTIONS:
• Reply: mailto:{{ $data['email'] }}?subject=Re: {{ $inquiryTypeLabel }} Inquiry
• View full details in HTML version of this email

This inquiry was submitted through violetkaponda.com
Auto-confirmation sent to {{ $data['email'] }}
