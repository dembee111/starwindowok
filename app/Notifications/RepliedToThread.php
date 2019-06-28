<?php

namespace App\Notifications;

use App\Customer;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class RepliedToThread extends Notification
{
    use Queueable;

    public $cusomter;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Customer $customer)
    {
        $this->customer = $customer->name;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return [ 'database'];
    }

  
    public function toDatabase($notifiable)
    {
        return [
            'data' => Carbon::now(). ' - Цагт хэрэглэгч ' . $this->customer . ' захиалага өгсөн байна'
        ];
    }


    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
