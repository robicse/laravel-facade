<?php

namespace App\Services;

class SomeServiceExample
{
    protected $secretKey;

    public function __construct(string $secretKey)
    {
        $this->secretKey = $secretKey;
    }

    public function doSomething()
    {
        return 'done';
    }
}
