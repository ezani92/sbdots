<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Dmiseev\TelegramNotification\TelegramChannel;
use Dmiseev\TelegramNotification\TelegramMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class NewDeposit extends Notification implements ShouldQueue
{
    use Queueable;

    public $transaction;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($transaction)
    {
        $this->transaction = $transaction;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database',TelegramChannel::class];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
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
            'title' => 'New Deposit',
            'message' => 'New deposit request from '.$this->transaction->user->name,
            'transaction_id' => $this->transaction->id,
        ];
    }

    public function toTelegram($notifiable)
    {
        return TelegramMessage::create()
            ->to('-242559530')
            ->content("*ALERT!* \n\n We have new deposit request from ".$this->transaction->user->name."!")
            ->button('View Deposit Request', url('https://sbdots.com'));
    }
}
