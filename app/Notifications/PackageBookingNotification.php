<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PackageBookingNotification extends Notification
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
            ->subject('Package Enquiry for ' . $this->details['package'] . ' from ' . $this->details['name'])
            ->replyTo($this->details['email'], $this->details['name'])
            ->line('You recieved a new enquiry form')
            ->line('Name: ' . $this->details['name'])
            ->line('Email: ' . $this->details['email'])
            ->line('Phone: ' . $this->details['phone'])
            ->line('Place of choice: ' . $this->details['type'])
            ->line('Package Selected: ' . $this->details['package'])
            ->line('No. of Adults: ' . $this->details['adults'])
            ->line('No. of Children: ' . $this->details['children']);
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
