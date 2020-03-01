<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class NewOrderFromAgent extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    private $order;
    public function __construct($order)
    {
        $this->order=$order;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $OID=substr(md5($this->order->id),0,5).'-'.$this->order->id;
        return (new MailMessage)
            ->subject('New Order from: '.$this->order->user->name)
            ->greeting('Dear, '.$notifiable->name)
            ->line('New order from: '.$this->order->user->name.' has been set')
            ->line('Review order details using following link:')
            ->action('Order Details', url('/admin/order/details/'.$this->order->id));
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
