<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->web(append: [
            \App\Http\Middleware\SetLocale::class,
            \App\Http\Middleware\UserActivity::class,
            \App\Http\Middleware\CheckReferral::class,
            \App\Http\Middleware\ActiveUser::class,
        ]);

        $middleware->use([
            \App\Http\Middleware\SaveRedirectUrl::class,
            \App\Http\Middleware\TrustProxies::class,
            \Illuminate\Http\Middleware\HandleCors::class,
            \App\Http\Middleware\PreventRequestsDuringMaintenance::class,
            \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
            \App\Http\Middleware\TrimStrings::class,
            \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
        ]);

        $middleware->alias([
            'role' => \Spatie\Permission\Middleware\RoleMiddleware::class,
            'permission' => \Spatie\Permission\Middleware\PermissionMiddleware::class,
            'PreventBackHistory' => \App\Http\Middleware\PreventBackHistory::class,
            'unsubscribed' => \App\Http\Middleware\Unsubscribed::class,
            'install' => \App\Http\Middleware\Install::class,
            'installed' => \App\Http\Middleware\Installed::class,
            '2fa' => \PragmaRX\Google2FALaravel\Middleware::class,
            '2fa.verify' => \App\Http\Middleware\TwoFactorAuthentication::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
