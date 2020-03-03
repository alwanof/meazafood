<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class YourOrderApproved extends Notification
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
        return ['mail','database'];
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
            ->subject('Congratulations! '.$notifiable->name.' Your order('.$OID.') has been approved!.')
            ->greeting('Dear, '.$notifiable->name)
            ->line('Congratulations! Your order('.$OID.') has been approved! and is now live in your Dashboard')
            ->line('Here\'s your confirmation for order number '.$OID.'. Review your order status using following link:')
            ->action('Order State', url('/admin/order/details/'.$this->order->id))
            ->line('What’s next:')
            ->line('As soon as we shipped your order , an email notification of (package  tracking number) will be sent to your email inbox.')
            ->line('For any issues with your order, please contact our Call Center.')
            ->attachData($this->pdf->output(), 'invoice_'.$OID.'.pdf');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        $OID=substr(md5($this->order->id),0,5).'-'.$this->order->id;
        return [
            'data'=>auth()->user()->name.' has been approved your order('.$OID.')',
            'user'=>auth()->user(),
            'link'=>url('/admin/order/details/'.$this->order->id)

        ];
    }
}
