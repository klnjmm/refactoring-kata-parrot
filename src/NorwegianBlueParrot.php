<?php

namespace Klnjmm;

class NorwegianBlueParrot extends Parrot
{
    const SPEED_WHEN_NAILED = 0;
    const MIN_BASE_SPEED_WITH_VOLTAGE = 24.0;

    /** @var double */
    protected $voltage;
    /** @var boolean */
    protected $isNailed;

    public function __construct($voltage, $isNailed)
    {
        $this->voltage = $voltage;
        $this->isNailed = $isNailed;
    }

    public function getSpeed()
    {
        return $this->isNailed ? self::SPEED_WHEN_NAILED : $this->getBaseSpeedWith($this->voltage);
    }

    protected function getBaseSpeedWith($voltage)
    {
        return min(self::MIN_BASE_SPEED_WITH_VOLTAGE, $voltage * $this->getBaseSpeed());
    }
}
