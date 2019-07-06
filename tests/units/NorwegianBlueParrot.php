<?php

namespace Klnjmm\tests\units;

class NorwegianBlueParrot extends \atoum
{
    const NORMAL_VOLTAGE = 1.5;
    const HIGH_VOLTAGE = 4;

    const IS_NAILED = true;
    const IS_NOT_NAILED = false;

    public function test_get_speed_norwegian_blue_parrot_nailed()
    {
        $this->newTestedInstance(self::NORMAL_VOLTAGE, self::IS_NAILED);
        $this->variable($this->testedInstance->getSpeed())->isEqualTo(0.0);
    }

    public function test_get_speed_norwegian_blue_parrot_not_nailed()
    {
        $this->newTestedInstance(self::NORMAL_VOLTAGE, self::IS_NOT_NAILED);
        $this->variable($this->testedInstance->getSpeed())->isEqualTo(18.0);
    }

    public function test_get_speed_norwegian_blue_parrot_not_nailed_high_voltage()
    {
        $this->newTestedInstance(self::HIGH_VOLTAGE, self::IS_NOT_NAILED);
        $this->variable($this->testedInstance->getSpeed())->isEqualTo(24.0);
    }
}
