<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactInquiry extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        $subject = sprintf(
            'New %s Inquiry from %s - violetnswanakaponda.com',
            $this->data['inquiry_type_label'],
            $this->data['name']
        );

        return new Envelope(
            subject: $subject,
            replyTo: $this->data['email']
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            html: 'emails.contact-inquiry',
            text: 'emails.contact-inquiry-text',
            with: [
                'data' => $this->data,
                'inquiryType' => $this->data['inquiry_type'],
                'inquiryTypeLabel' => $this->data['inquiry_type_label']
            ]
        );
    }

    /**
     * Get the attachments for the message.
     */
    public function attachments(): array
    {
        return [];
    }
}
