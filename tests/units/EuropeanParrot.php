<?php

namespace Klnjmm\tests\units;

class EuropeanParrot extends \atoum
{
    public function test_get_speed_of_european_parrot()
    {
        $this->variable($this->newTestedInstance->getSpeed())->isEqualTo(12.0);
    }
}
