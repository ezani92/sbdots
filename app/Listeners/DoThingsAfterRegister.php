<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Registered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class DoThingsAfterRegister
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
     * @param  RegisterWasSuccessful  $event
     * @return void
     */
    public function handle(Registered $event)
    {
        $random_tac = mt_rand(100000, 999999);

        $event->user->tac_no = $random_tac;
        $event->user->save();
    }
}
