<?php

namespace App\Events;

use App\Order;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;

class AdminUpdateOrder
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $order;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Order $order)
    {
        $this->order=$order;
    }


}
