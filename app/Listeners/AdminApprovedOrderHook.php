<?php

namespace App\Listeners;

use App\Notifications\NewOrderFromAgent;
use App\Notifications\YourOrderApproved;
use App\Notifications\YourOrderUnderReview;
use App\User;
use Illuminate\Support\Facades\Notification;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use PDF;
class AdminApprovedOrderHook
{

    public function handle($event)
    {
        $order=$event->order;
        $OID=substr(md5($order->id),0,5).'-'.$order->id;
        $pdf = PDF::loadView('orders.order_invoice',compact(['order','OID']));
        $event->order->user->notify(new YourOrderApproved($pdf,$order));


    }
}
