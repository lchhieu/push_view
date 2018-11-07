<?php

namespace Lchhieu\PushView\Facades;

use Illuminate\Support\Facades\Facade;

class JavaScriptFacade extends Facade
{
    /**
     * The name of the binding in the IoC container.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'PushViewJS';
    }
}