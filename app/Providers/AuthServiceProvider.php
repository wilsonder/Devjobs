<?php

namespace App\Providers;

use Illuminate\Support\HtmlString;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Lang;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //como cambiar el nombre de los correos que envia laravel

        VerifyEmail::toMailUsing(function ($notifiable, $url) {
            return (new MailMessage)
                ->subject('Verificar Cuenta')
                ->greeting(Lang::get("Hola ") . $notifiable->name)
                ->line('Tu Cuenta ya esta casi lista, solo debes presionar el enlace a continuación')
                ->action('Confirmar Cuenta', $url)
                ->line('Si no creaste esta cuenta, puedes ignorar este mensaje')
                ->salutation(new HtmlString(
                    Lang::get("Saludos.") . '<br>' . '<strong>' . Lang::get("Equipo DevJobs") . '</strong>'
                ));
        });
    }
}
