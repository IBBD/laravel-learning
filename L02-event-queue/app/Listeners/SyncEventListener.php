<?php

namespace App\Listeners;

use App\Events\SyncEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SyncEventListener
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
     * @param  SyncEvent  $event
     * @return void
     */
    public function handle(SyncEvent $event)
    {
        sleep($event->sleep);
        \Log::info('同步事件，程序执行的时候就同步运行了～如果这里处理速度太慢就糟了～～');
    }
}
