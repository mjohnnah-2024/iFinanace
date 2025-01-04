<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NotifyClient extends Notification
{
    use Queueable;
    public $data;


    /**
     * Create a new notification instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
    }  
        
    

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        //return (new MailMessage)->markdown('mail.notify-client');
        return (new MailMessage)
        ->subject('Your Message Submitted Successfully')
        ->line('We will get in touch with you shorltly.')
        ->action('Notification Action', url('/products'))
        ->line('Thank you for getting in touch!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
