<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendEmailUsingGmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The data for the email message.
     *
     * @var array
     */
    public $name;
    public $email;
    public $message;

    /**
     * Create a new message instance.
     *
     * @param  string  $name
     * @param  string  $email
     * @param  string  $message
     * @return void
     */
    public function __construct($name, $email, $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->email)
                    ->subject('New Contact Form Submission')
                    ->markdown('mail.send-email-using-gmail')
                    ->with([
                        'name' => $this->name,
                        'email' => $this->email,
                        'message' => $this->message,
                    ]);
    }

    /**
     * Send the email message using Gmail.
     *
     * @param  string  $name
     * @param  string  $email
     * @param  string  $message
     * @return void
     */
    public static function sendEmail($name, $email, $message)
    {
        Mail::to('sendmailtotechhubadnu@gmail.com')->send(new SendEmailUsingGmail($name, $email, $message));
    }
}
