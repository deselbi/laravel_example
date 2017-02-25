<?php

namespace App\Listeners;

use App\Events\FooWasCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotifyFooSubsribersListener
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
     * @param  FooWasCreated  $event
     * @return void
     */
    public function handle(FooWasCreated $event)
    {
        var_dump('FooWasCreated handled by NotifyFooSubsribersListener');
    }
}
