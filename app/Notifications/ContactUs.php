<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ContactUs extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public $userDetails ;
    public function __construct($userDetails)
    {
       $this->userDetails = $userDetails;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->greeting("hello")
                    ->subject($this->userDetails->subject)
                    ->line("User Name:".$this->userDetails->full_name)
                    ->line("User Email:".$this->userDetails->email)
                    ->line($this->userDetails->message)
                    //->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
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
            'title'=> 'You have a query from a user.',
            'message'=> 'You have a query from a user.',
            'link'=> url('/admin/view-query/'.$this->userDetails->id),
        ];
    }
}
