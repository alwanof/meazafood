<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class YourOrderTrackingNo extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    private $pdf;
    private $order;
    public function __construct($pdf,$order)
    {
        $this->pdf=$pdf;
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
            ->subject('your package has been shipped')
            ->greeting('Dear, '.$notifiable->name)
            ->line('Your order with reference number: '.$OID.' is on the way for delivery')
            ->line('You can track your order status on :')
            ->action('Shipping Tracking',$this->order->status_note )
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
