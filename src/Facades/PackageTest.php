<?php

namespace ItsFreSsh\PackageTest\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ItsFreSsh\PackageTest\PackageTest
 */
class PackageTest extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \ItsFreSsh\PackageTest\PackageTest::class;
    }
}
