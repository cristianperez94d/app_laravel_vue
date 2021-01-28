<?php

namespace App\Providers;

use Inertia\Inertia;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Inertia::share('flash', function() {
            return ['status' => Session::get('status')];
        });
        VerifyEmail::toMailUsing(function ($notifiable, $url) {
            return (new MailMessage)
                ->subject('Confirme su dirección de correo electrónico')
                ->line('Haga clic en el botón de abajo para verificar su dirección de correo electrónico.')
                ->action('Confirme su dirección de correo electrónico', $url);
        });
    }
}
