<?php

namespace App\Notifications;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class AdminRegisteredNotification extends Notification implements ShouldQueue
{
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('A new user has registered!')
            ->action('View user details', url('/admin/users'))
            ->line('Check the admin panel for more details.');
    }
}
