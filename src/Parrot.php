<?php

namespace Klnjmm;

abstract class Parrot
{
    const BASE_SPEED = 12.0;

    abstract public function getSpeed();

    protected function getBaseSpeed()
    {
        return self::BASE_SPEED;
    }
}
