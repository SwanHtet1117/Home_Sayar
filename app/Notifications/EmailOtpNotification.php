<?php

namespace App\Notifications;

use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class EmailOtpNotification extends Notification
{
    public function __construct(
        public readonly string $code,
        public readonly string $purpose,
    ) {}

    /**
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        $isLogin = $this->purpose === 'login';
        $name = trim($notifiable->name ?? '') ?: 'there';
        $subject = $isLogin
            ? 'Your HomeSayar sign-in code'
            : 'Your HomeSayar password reset code';
        $viewData = [
            'code' => $this->code,
            'name' => $name,
            'title' => $subject,
            'instruction' => $isLogin
                ? 'Use this one-time code to finish signing in:'
                : 'Use this one-time code to complete your password reset:',
            'ignoreMessage' => $isLogin
                ? 'If you did not try to sign in, you can ignore this email.'
                : 'If you did not request this code, you can ignore this email.',
            'homeUrl' => config('app.url'),
        ];

        return (new MailMessage)
            ->subject($subject)
            ->view('emails.auth.otp', $viewData)
            ->text('emails.auth.otp-text', $viewData);
    }
}
