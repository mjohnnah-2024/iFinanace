<?php

namespace App\Listeners;

use App\Events\SubmitContactForm;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use App\Notifications\NotifyAdmin;

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
        Notification::route('mail', 'admin@ifinancepng.com')->notify(new NotifyAdmin($event->data));
    }
}
