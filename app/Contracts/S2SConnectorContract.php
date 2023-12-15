<?php

namespace App\Contracts;

abstract class S2SConnectorContract
{
    abstract public function shouldTrack(): bool;

    abstract public function sendEvent(): bool;
}
