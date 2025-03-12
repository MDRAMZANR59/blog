<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Log;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class DeleteBlogMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;
    public $pass_to_blade;
    /**
     * Create a new message instance.
     */
    public function __construct($set_name_for_listener)
    {
        $this->pass_to_blade = $set_name_for_listener;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        Log::info("Data Catch From Listener");
        return new Envelope(
            subject: 'Delete Blog Mail',
        );
        Log::info('Subject Maked');
    }

    /**
     * Get the message content definition.
     */
    // public function content(): Content
    // {
    //     return new Content(
    //         view: 'view.name',
    //     );
    // }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }

    public function build()
    {
        return $this->view('backend.partials.deleteBlog', ['data' => $this->pass_to_blade]);
        Log::info('Data Pass To Blade');
    }
}
