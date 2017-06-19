<?php

namespace Dazzle\Util\Test\TUnit\Support;

use Dazzle\Util\Test\TUnit\Support\_Mock\TimeSupportMock;
use Dazzle\Util\Support\TimeSupport;
use Dazzle\Util\Test\TUnit;

class TimeSupportTest extends TUnit
{
    /**
     *
     */
    public function testApiNow_ReturnsTimestampForNow()
    {
        $time = $this->createTimeSupportMock();

        $expected = time() * 1000;
        $now = $time->now();

        $this->assertGreaterThanOrEqual($expected, $now);
        $this->assertLessThan($expected + 1000, $now);
    }

    /**
     * @return TimeSupport
     */
    public function createTimeSupportMock()
    {
        return new TimeSupportMock();
    }
}
