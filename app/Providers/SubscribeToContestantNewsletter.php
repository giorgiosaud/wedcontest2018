<?php

namespace App\Providers;

use App\Events\RegisterContestant;

class SubscribeToContestantNewsletter
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
     * @param RegisterContestant $event
     *
     * @return void
     */
    public function handle(RegisterContestant $event)
    {
        //
    }
}
