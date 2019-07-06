<?php

namespace Klnjmm;

class AfricanParrot extends Parrot
{
    const LOAD_FACTOR = 9.0;
    const MINIMUM_SPEED = 0;

    /** @var int */
    protected $numberOfCoconuts;

    public function __construct($numberOfCoconuts)
    {
        $this->numberOfCoconuts = $numberOfCoconuts;
    }

    public function getSpeed()
    {
        return max(self::MINIMUM_SPEED, $this->getBaseSpeed() - self::LOAD_FACTOR * $this->numberOfCoconuts);
    }
}
