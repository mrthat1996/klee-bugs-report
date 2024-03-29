<?php

namespace Mrthat1996\KleeBugsReport\Providers;

use Illuminate\Log\Events\MessageLogged;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Mrthat1996\KleeBugsReport\KleeHelper;
use Mrthat1996\KleeBugsReport\Listeners\KleeBugsReportListener;

class KleeBugsReportServiceProvider extends ServiceProvider
{
    protected $listen = [
        MessageLogged::class => [
            KleeBugsReportListener::class,
        ],
    ];

    public function boot()
    {
        parent::boot();
    }

    public function register()
    {
        parent::register();
        $this->app->bind('Klee', function () {
            return new KleeHelper();
        });
    }
}