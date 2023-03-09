<?php

namespace Labdacaraka\LabdacarakaInstaller\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Labdacaraka\LabdacarakaInstaller\LabdacarakaInstaller
 */
class LabdacarakaInstaller extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Labdacaraka\LabdacarakaInstaller\LabdacarakaInstaller::class;
    }
}
