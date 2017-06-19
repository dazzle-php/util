<?php

namespace Dazzle\Util\Test\TUnit\Factory;

use Dazzle\Util\Test\TUnit\Factory\_Partial\FactoryPartial;
use Dazzle\Util\Test\TUnit;
use Dazzle\Util\Factory\Factory;
use Dazzle\Util\Factory\FactoryInterface;

class FactoryTest extends TUnit
{
    use FactoryPartial;

    /**
     * @return FactoryInterface
     */
    public function createFactory()
    {
        return new Factory();
    }
}
