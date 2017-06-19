<?php

namespace Dazzle\Util\Test\TUnit\Enum\_Mock;

use Dazzle\Util\Enum\EnumInterface;
use Dazzle\Util\Enum\EnumTrait;

class EnumMock implements EnumInterface
{
    use EnumTrait;

    /**
     * @var string
     */
    const TEST_A = 'TEST_A';

    /**
     * @var string
     */
    const TEST_B = 'TEST_B';
}
