<?php

namespace Mrthat1996\KleeBugsReport;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    public function boot(): void
    {
        $this->setUpConfig();
    }

    private function setUpConfig()
    {
        $source = dirname(__DIR__) . '/config/klee_bugs_report.php';
        $this->publishes([$source => config_path('klee_bugs_report.php')], 'config');
        $this->mergeConfigFrom($source, 'klee_bugs_report');
    }
}