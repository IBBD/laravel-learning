<?php

namespace App\Listeners;

use App\Events\AsyncEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class AsyncEventListener  implements ShouldQueue
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
     * @param  AsyncEvent  $event
     * @return void
     */
    public function handle(AsyncEvent $event)
    {
        sleep($event->sleep);
        \Log::info('异步事件，要用事件监听器来执行我哦～');
    }
}
