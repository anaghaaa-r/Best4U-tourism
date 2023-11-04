<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class HomeBookingNotification extends Notification
{
    use Queueable;

    public $formDetails;

    public function __construct($formDetails)
    {
        $this->formDetails = $formDetails;
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
                    ->from($this->formDetails['email'], $this->formDetails['name'])
                    ->subject('Home Page Form Submission from ' . $this->formDetails['name'])
                    ->replyTo($this->formDetails['email'], $this->formDetails['name'])
                    ->line('You received a new form submission from home page.')
                    ->line('Name: ' . $this->formDetails['name'])
                    ->line('Mobile: ' . $this->formDetails['mobile'])
                    ->line('Email: ' . $this->formDetails['email']);
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
