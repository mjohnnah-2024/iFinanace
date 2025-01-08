<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NotifyAdmin extends Notification
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
        return (new MailMessage)
        ->markdown('mail.nofify-admin')
        ->subject('Message From Contact Form');

       /* return (new MailMessage)
        ->subject('Message From Contact Form')
            ->line('Message Details:')
            ->line('Name: '.$this->data['name'])
            ->line('Email: '.$this->data['email'])
            ->line('Phone: '.$this->data['phone'])
            ->line('Message: '.$this->data['message']);
            **/
            
          
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
