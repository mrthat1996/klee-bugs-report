<?php

namespace Mrthat1996\KleeBugsReport\Listeners;

use Mrthat1996\KleeBugsReport\KleeHelper;

class KleeBugsReportListener
{
    private KleeHelper $kleeHelper;

    public function __construct(KleeHelper $kleeHelper)
    {
        $this->kleeHelper = $kleeHelper;
    }

    public function handle($event)
    {
        if (in_array($event->level, explode(",", config('klee_bugs_report.log_level')))
            && in_array(config('app.env'), explode(",", config('klee_bugs_report.log_env')))) {

            $message = "{$event->context['exception']->getFile()}:{$event->context['exception']->getLine()} {$event->context['exception']->getMessage()}";
            $data = $event->context['exception']->getTrace();

            $this->kleeHelper->log($message, $data);
        }
    }
}