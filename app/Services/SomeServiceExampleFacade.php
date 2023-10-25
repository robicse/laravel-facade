<?php

namespace App\Services;
// use Illuminate\Support\Facades\Facade;
use App\Facade;
/**
 * @method static string doSomething()
 */

class SomeServiceExampleFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'SomeService';
        // return SomeServiceExample::class;
    }
}
