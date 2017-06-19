<?php

namespace Dazzle\Util\Test\TUnit\Factory;

use Dazzle\Util\Test\TUnit\Factory\_Mock\FactoryMock;
use Dazzle\Util\Test\TUnit\Factory\_Partial\FactoryPartial;
use Dazzle\Util\Test\TUnit;
use Dazzle\Util\Factory\FactoryInterface;

class FactoryTraitTest extends TUnit
{
    use FactoryPartial;

    /**
     * @return FactoryInterface
     */
    public function createFactory()
    {
        return new FactoryMock();
    }
}
