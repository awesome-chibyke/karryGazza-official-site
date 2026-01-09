<?php

namespace App\Mail;

use App\Models\Settings;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MessageFromContactForm extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $settings;
    
    public function __construct(Settings $settings)
    {
        $this->settings = $settings;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->view('email.contact_us')
        ->with([
                'content' => $this->settings->content,
                'subject' => $this->settings->subject,
                'user_email' => $this->settings->user_email,
                'name'=> $this->settings->name,
                'settings'=> $this->settings,
            ]);
    }
}