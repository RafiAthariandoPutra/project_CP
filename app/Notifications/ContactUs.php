<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ContactUs extends Notification
{
    use Queueable;

    public $data;
    /**
     * Create a new notification instance.
     */

    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {


        return (new MailMessage)
            ->subject('Contact Send')
            ->line('Halo Codenest saya ' . $this->data['name'])
            ->line('Dan saya dari perusahaan : ' . $this->data['company_name'])
            ->line('Email : ' . $this->data['email'])
            ->line('Phone Number : ' . $this->data['phone_number'])
            ->line('Message : ' . $this->data['message'])
            ->line('Terimakasih atas perhatianya!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
