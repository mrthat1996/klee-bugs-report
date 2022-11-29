<?php

namespace Mrthat1996\KleeBugsReport\Facades;

use Illuminate\Support\Facades\Facade;

class KleeFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Klee';
    }
}