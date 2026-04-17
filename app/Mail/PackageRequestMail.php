<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PackageRequestMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(public array $data)
    {
        //
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Package Request: ' . $this->data['package'] . ' (' . $this->data['service'] . ')',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.package-request',
            with: ['data' => $this->data],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        $attachments = [];

        foreach ($this->data['files'] as $file) {
            $path = is_array($file) ? $file['path'] : $file;
            $name = is_array($file) ? $file['name'] : basename($file);
    
            $fullPath = storage_path('app/public/' . $path);
    
            if (file_exists($fullPath)) {
                $attachments[] = \Illuminate\Mail\Mailables\Attachment::fromPath($fullPath)
                    ->as($name);
            }
        }
    
        return $attachments;
    }
}
