<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class YourOrderUnderReview extends Notification
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
            ->subject('Your order has received.')
                    ->greeting('Dear, '.$notifiable->name)
                    ->line('Thanks for your order.')
                    ->line('Here\'s your confirmation for order number '.$OID.'. Review your order status using following link:')
                    ->action('Order State', url('/admin/order/details/'.$this->order->id))
                    ->line('As soon as we confirmed your order , an electronic copy of your invoice will be sent to your email inbox.')
                    ->line('For any issues with your order, please contact our Call Center.');

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
