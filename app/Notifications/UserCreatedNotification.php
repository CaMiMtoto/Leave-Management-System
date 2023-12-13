<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\URL;


class UserCreatedNotification extends Notification implements ShouldQueue
{
    use Queueable;

    // Add any additional properties or methods you may need

    public function toMail($notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('Welcome! Set Your Password')
            ->line('You have been added to the system. Please click the link below to set your password.')
            ->action('Set Password', $this->getSetPasswordUrl($notifiable))
            ->line('If you did not request this, no further action is required.');
    }

    protected function getSetPasswordUrl($notifiable): string
    {
        return URL::temporarySignedRoute('set-password-form', now()->addHours(2), ['user' => $notifiable->id]);
    }
}
