<?php

namespace Klnjmm\tests\units;

use Klnjmm\ParrotTypeEnum;

class Parrot extends \atoum
{
    public function test_get_speed_of_european_parrot()
    {
        $this->newTestedInstance(ParrotTypeEnum::EUROPEAN, 0,0, false);
        $this->variable($this->testedInstance->getSpeed())->isEqualTo(12.0);
    }

    public function test_get_speed_of_african_parrot_with_one_coconut()
    {
        $this->newTestedInstance(ParrotTypeEnum::AFRICAN, 1, 0, false);
        $this->variable($this->testedInstance->getSpeed())->isEqualTo(3.0);
    }

    public function test_get_speed_of_african_parrot_with_two_coconuts()
    {
        $this->newTestedInstance(ParrotTypeEnum::AFRICAN, 2, 0, false);
        $this->variable($this->testedInstance->getSpeed())->isEqualTo(0.0);
    }

    public function test_get_speed_of_african_parrot_with_no_coconuts()
    {
        $this->newTestedInstance(ParrotTypeEnum::AFRICAN, 0, 0, false);
        $this->variable($this->testedInstance->getSpeed())->isEqualTo(12.0);
    }

    public function test_get_speed_norwegian_blue_parrot_nailed()
    {
        $this->newTestedInstance(ParrotTypeEnum::NORWEGIAN_BLUE, 0, 1.5, true);
        $this->variable($this->testedInstance->getSpeed())->isEqualTo(0.0);
    }

    public function test_get_speed_norwegian_blue_parrot_not_nailed()
    {
        $this->newTestedInstance(ParrotTypeEnum::NORWEGIAN_BLUE, 0, 1.5, false);
        $this->variable($this->testedInstance->getSpeed())->isEqualTo(18.0);
    }

    public function test_get_speed_norwegian_blue_parrot_not_nailed_high_voltage()
    {
        $this->newTestedInstance(ParrotTypeEnum::NORWEGIAN_BLUE, 0, 4, false);
        $this->variable($this->testedInstance->getSpeed())->isEqualTo(24.0);
    }

    public function test_get_speed_throw_an_exception_for_unknown_parrot()
    {
        $this->newTestedInstance(-1, 0,0, false);
        $this->exception(function() {
            $this->testedInstance->getSpeed();
        });
    }
}
