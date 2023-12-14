<?php

namespace App\Notifications;

use App\Models\Memory;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Hash;
use \Vinkla\Hashids\Facades\Hashids;

class MemoryCreated extends Notification
{
    use Queueable;

    public Memory $memory;

    /**
     * Create a new notification instance.
     */
    public function __construct(Memory $memory)
    {
        $this->memory = $memory;
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
            ->subject('Verify your memory')
            ->line('Please verify your submission by clicking the link below.')
            ->action(
                'Verify',
                route('memory.verify', [
                    'memory' => $this->memory->id,
                    'hash' =>  Hashids::encode($this->memory->id)
                ])
            )
            ->line('Thank you for your support!');
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
