<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactConfirmation extends Mailable implements ShouldQueue
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
        return new Envelope(
            from: config('mail.from.address', 'violet@violetnswanakaponda.com'),
            subject: sprintf(
                'Thank you for your %s inquiry - I\'ll respond within 24-48 hours',
                strtolower($this->data['inquiry_type_label'])
            )
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            html: 'emails.contact-confirmation',
            text: 'emails.contact-confirmation-text',
            with: [
                'data' => $this->data,
                'inquiryType' => $this->data['inquiry_type'],
                'inquiryTypeLabel' => $this->data['inquiry_type_label'],
                'name' => $this->data['name']
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
