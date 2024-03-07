<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ForgetPassword extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public $token;
    public $user;
    public function __construct($token, $user)
    {
        $this->token = $token;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        // if($this->user->role_id == 2){
        //     $url = url('reset-password/'.$this->token);
        // }else{
        //     $url = url('admin/password/reset/'.$this->token);
        // }
        $url = url('reset-password/'.$this->token);
        
        return (new MailMessage)
                    ->greeting('Hello!')
                    ->line('Use the following link to reset your password.')
                    ->action('Reset Password', $url)
                    ->line('If you did not request to have your password reset, you can safely ignore this email.');
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
           // 'Request made for reset password.'
        ];
    }
}
