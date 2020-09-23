<?php
namespace App\Notifications;

use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class TransporterRegisteredNotification extends Notification {

    public function __construct($user) {
        $this->user = $user;
    }

    public function via($notifiable) {
        return ['mail'];
    }

    public function toMail($notifiable) {
        return (new MailMessage)
            ->success()
            ->subject('Welcome')
            ->line('Dear ' . $this->user->name . ', we are happy to see you here.')
            ->line('These are your Registration Details')
            ->line('name ' . $this->user->name)
            ->line('email ' . $this->user->email)
            ->line('phone ' . $this->user->phone)
            ->line('Address ' . $this->user->address)
            ->action('Go to site', url('/'))
            ->line('Please tell your friends about us.');
    }

}