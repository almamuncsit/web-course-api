<?php

namespace WebCourse\Listeners;

use WebCourse\Events\RegistrationEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use WebCourse\Notifications\RegistrationNotification;

class RegistrationNotificationListener implements shouldQueue
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
        $event->user->notify(new RegistrationNotification());
    }
}
