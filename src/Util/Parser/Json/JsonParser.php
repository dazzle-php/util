<?php

namespace Dazzle\Util\Parser\Json;

use Dazzle\Util\Enum\EnumInterface;
use Dazzle\Util\Enum\EnumTrait;
use Dazzle\Util\Parser\ParserInterface;

class JsonParser implements ParserInterface, EnumInterface
{
    use EnumTrait;

    /**
     * @var int
     */
    const DECODE_DEFAULT = 2;

    /**
     * @var int
     */
    const DECODE_OBJECT = 1;

    /**
     * @var int
     */
    const DECODE_ARRAY  = 2;

    /**
     * @var int
     */
    private $flags;

    /**
     * @param int $flags
     */
    public function __construct($flags = self::DECODE_DEFAULT)
    {
        $this->flags = $flags;
    }

    /**
     *
     */
    public function __destruct()
    {
        unset($this->flags);
    }

    /**
     * @override
     * @inheritDoc
     */
    public function encode($mixed)
    {
        return json_encode($mixed);
    }

    /**
     * @override
     * @inheritDoc
     */
    public function decode($str)
    {
        if (($this->flags & self::DECODE_ARRAY) === self::DECODE_ARRAY)
        {
            return json_decode($str, true);
        }
        else if (($this->flags & self::DECODE_OBJECT) === self::DECODE_OBJECT)
        {
            return json_decode($str);
        }

        return null;
    }
}
