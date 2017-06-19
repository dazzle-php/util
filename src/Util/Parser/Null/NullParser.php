<?php

namespace Dazzle\Util\Parser\Null;

use Dazzle\Util\Parser\ParserInterface;

class NullParser implements ParserInterface
{
    /**
     * @override
     * @inheritDoc
     */
    public function encode($mixed)
    {
        return '';
    }

    /**
     * @override
     * @inheritDoc
     */
    public function decode($str)
    {
        return null;
    }
}
