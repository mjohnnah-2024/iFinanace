<?php

namespace App\Listeners;

use App\Events\SubmitContactForm;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use App\Notifications\NotifyAdmin;
use App\Notifications\NotifyClient;

class ContactFormSubmitted
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(SubmitContactForm $event): void
    {
        //Mail::to('admin@ifinancepng.com')->send(new NotifyAdmin($event->data));
        Notification::route('mail', 'ifinancepng@nextgenpng.net')->notify(new NotifyAdmin($event->data));
        //Notification::route('mail', $event->data['email'])->notify(new NotifyClient($event->data));
    }
}
