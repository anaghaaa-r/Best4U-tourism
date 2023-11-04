<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ContactUsNotification extends Notification
{
    use Queueable;

    public $details;
    /**
     * Create a new notification instance.
     */
    public function __construct($formDetails)
    {
        $this->details = $formDetails;
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
            ->from($this->details['email'], $this->details['name'])
            ->subject('Contact Details from ' . $this->details['name'])
            ->replyTo($this->details['email'], $this->details['name'])
            ->line($this->details['name'] . ' sent a message to you.')
            ->line('Name: ' . $this->details['name'])
            ->line('Email: ' . $this->details['email'])
            ->line('Message: ' . $this->details['message']);
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
