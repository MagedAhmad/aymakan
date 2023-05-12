<?php

namespace MagedAhmad\Aymakan\Facades;

use Illuminate\Support\Facades\Facade;

class Aymakan extends Facade
{

    protected static function getFacadeAccessor(): string
    {
        return 'aymakan';
    }
}