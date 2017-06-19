<?php

namespace Dazzle\Util\Test\TUnit\Factory;

use Dazzle\Util\Test\TUnit\Factory\_Mock\SimpleFactoryMock;
use Dazzle\Util\Test\TUnit\Factory\_Partial\SimpleFactoryPartial;
use Dazzle\Util\Test\TUnit;
use Dazzle\Util\Factory\SimpleFactoryInterface;

class SimpleFactoryTraitTest extends TUnit
{
    use SimpleFactoryPartial;

    /**
     * @return SimpleFactoryInterface
     */
    public function createFactory()
    {
        return new SimpleFactoryMock();
    }
}
