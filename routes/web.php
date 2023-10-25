<?php

use App\Facade;
use App\Services\SomeServiceExample;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Config;
use App\Services\SomeServiceExampleFacade;
use Facades\App\Example;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// https://www.youtube.com/watch?v=qSJlovwPEJE // reference link
Route::get('/', function () {
    // $service = new SomeServiceExample();
    // dd($service->doSomething());

    // dd(SomeServiceExample::doSomething());

    // dd(Config::get('app.name'));

    // dd(SomeServiceExampleFacade::doSomething());

    // dd(Facade::something(1,2,3));

    dd(Example::process());
});
