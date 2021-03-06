<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class AsyncEvent extends Event
{
    use SerializesModels;

    public $sleep;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($sleep)
    {
        $this->sleep = $sleep;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}
