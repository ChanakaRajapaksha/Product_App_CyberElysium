<?php

namespace domain\Facades;

use domain\Services\ViewService;
use Illuminate\Support\Facades\Facade;

class ViewFacade extends Facade 
{
    protected static function getFacadeAccessor() 
    {
        return ViewService::class;
    }
}