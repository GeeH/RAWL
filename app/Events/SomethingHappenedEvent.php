<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class SomethingHappenedEvent implements ShouldBroadcast
{
    use Dispatchable;

    public array $data = [
        'thanks' => [
            'Smokey697',
            'craigsimps',
            'lstables',
            'assertchris',
            'jamboninho',
            'piercemcgeough',
        ],
    ];

    public function broadcastOn(): Channel|array
    {
        return new Channel('RAWL');
    }
}
