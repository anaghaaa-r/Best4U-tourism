<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ServiceBookingNotification extends Notification
{
    use Queueable;

    public $serviceDetails;

    public function __construct($serviceDetails)
    {
        $this->serviceDetails = $serviceDetails;
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
                    ->from($this->serviceDetails['email'], $this->serviceDetails['name'])
                    ->subject('Enquiry form for ' . $this->serviceDetails['service'] . ' from ' . $this->serviceDetails['name'])
                    ->replyTo($this->serviceDetails['email'], $this->serviceDetails['name'])
                    ->line('You received a new form submission from home page.')
                    ->line('Name: ' . $this->serviceDetails['name'])
                    ->line('Mobile: ' . $this->serviceDetails['phone'])
                    ->line('Email: ' . $this->serviceDetails['email'])
                    ->line('Service Requires: ' . $this->serviceDetails['service'])
                    ->line('Comments: ' . $this->serviceDetails['comments']);
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
