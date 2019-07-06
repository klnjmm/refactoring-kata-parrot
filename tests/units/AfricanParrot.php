<?php

namespace Klnjmm\tests\units;

class AfricanParrot extends \atoum
{
    const NO_COCONUTS = 0;
    const ONE_COCONUT = 1;
    const TWO_COCONUTS = 2;

    public function test_get_speed_of_african_parrot_with_no_coconuts()
    {
        $this->newTestedInstance(self::NO_COCONUTS);
        $this->variable($this->testedInstance->getSpeed())->isEqualTo(12.0);
    }

    public function test_get_speed_of_african_parrot_with_one_coconut()
    {
        $this->newTestedInstance(self::ONE_COCONUT);
        $this->variable($this->testedInstance->getSpeed())->isEqualTo(3.0);
    }

    public function test_get_speed_of_african_parrot_with_two_coconuts()
    {
        $this->newTestedInstance(self::TWO_COCONUTS);
        $this->variable($this->testedInstance->getSpeed())->isEqualTo(0.0);
    }
}
