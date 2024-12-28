<?php

namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    
        /**
         * The name of the contact.
         *
         * @var string
         */
        public $name;
    
        /**
         * The email of the contact.
         *
         * @var string
         */
        public $email;
    
        /**
         * The phone number of the contact.
         *
         * @var string
         */
        public $phone;
    
        /**
         * The message from the contact.
         *
         * @var string
         */
        public $message;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $phone, $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Contact Form Submission')
                    ->view('contact'); 
    }
}
