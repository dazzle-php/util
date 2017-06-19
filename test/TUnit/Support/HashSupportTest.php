<?php

namespace Dazzle\Util\Test\TUnit\Support;

use Dazzle\Util\Test\TUnit\Support\_Mock\HashSupportMock;
use Dazzle\Util\Support\HashSupport;
use Dazzle\Util\Test\TUnit;

class HashSupportTest extends TUnit
{
    /**
     *
     */
    public function testApiGenId_GeneratesUniqId()
    {
        $gen = $this->createHashSupportMock();
        $prefix = 'test';

        $this->assertRegExp("#^$prefix([a-z0-9]*?)\.([a-z0-9]*?)$#si", $gen::hash($prefix));
    }

    /**
     * @return HashSupport
     */
    public function createHashSupportMock()
    {
        return new HashSupportMock();
    }
}
