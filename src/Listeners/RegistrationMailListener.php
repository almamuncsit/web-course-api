<?php

namespace WebCourse\Listeners;

use Illuminate\Support\Facades\Mail;
use WebCourse\Events\RegistrationEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use WebCourse\Mail\RegistrationMailable;

class RegistrationMailListener implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  RegistrationEvent  $event
     * @return void
     */
    public function handle(RegistrationEvent $event)
    {
        Mail::to($event->user->email)->send(new RegistrationMailable($event->user));
    }
}
