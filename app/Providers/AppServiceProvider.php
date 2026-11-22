<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Mail\Events\MessageSending;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\URL;
use Illuminate\Validation\Rules\Password;
use RuntimeException;
use Symfony\Component\Mime\Part\DataPart;
use Symfony\Component\Mime\Part\File;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Password::defaults(
            fn (): Password => Password::min(8)->mixedCase()->numbers()->symbols()
        );

        // Production Environment (Render) ပေါ်ရောက်ပါက HTTPS သို့ Force ပြောင်းခိုင်းခြင်း
        if (config('app.env') === 'production' || $this->app->environment('production')) {
            URL::forceScheme('https');
        }

        Event::listen(MessageSending::class, function (MessageSending $event): void {
            $html = $event->message->getHtmlBody();

            if (! is_string($html) || ! str_contains($html, 'cid:homesayar-logo@homesayar')) {
                return;
            }

            $logoPath = public_path('images/home_sayar_logo.png');

            if (! is_file($logoPath)) {
                throw new RuntimeException("HomeSayar email logo not found at [{$logoPath}].");
            }

            $event->message->addPart(
                (new DataPart(new File($logoPath), 'home_sayar_logo.png', 'image/png'))
                    ->asInline()
                    ->setContentId('homesayar-logo@homesayar'),
            );
        });
    }
}