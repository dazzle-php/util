<?php

namespace Dazzle\Util\Test\TUnit\Support;

use Dazzle\Util\Test\TUnit\Support\_Mock\GeneratorSupportMock;
use Dazzle\Util\Support\GeneratorSupport;
use Dazzle\Util\Test\TUnit;

class GeneratorSupportTest extends TUnit
{
    /**
     *
     */
    public function testApiGenId_GeneratesUniqId()
    {
        $gen = $this->createGeneratorSupportMock();
        $prefix = 'test';

        $this->assertRegExp("#^$prefix([a-z0-9]*?)\.([a-z0-9]*?)$#si", $gen->genId($prefix));
    }

    /**
     * @return GeneratorSupport
     */
    public function createGeneratorSupportMock()
    {
        return new GeneratorSupportMock();
    }
}
