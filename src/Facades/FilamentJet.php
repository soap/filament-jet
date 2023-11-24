<?php

namespace Soap\FilamentJet\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Prasit Gebsaap\FilamentJet\FilamentJet
 */
class FilamentJet extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Soap\FilamentJet\FilamentJet::class;
    }
}
