<?php

namespace Dazzle\Util\Test\TUnit\Parser\Null;

use Dazzle\Util\Test\TUnit;
use Dazzle\Util\Parser\Null\NullParser;
use Dazzle\Util\Parser\ParserInterface;
use StdClass;

class NullParserTest extends TUnit
{
    /**
     * @dataProvider parsersProvider
     */
    public function testApiEncode_ReturnsNull(ParserInterface $parser)
    {
        $this->assertEquals(null, $parser->encode($this->getObject()));
    }

    /**
     * @dataProvider parsersProvider
     */
    public function testApiDecode_ReturnsEmptyString(ParserInterface $parser)
    {
        $this->assertEquals('', $parser->decode($this->getString()));
    }

    /**
     * @return ParserInterface[]
     */
    public function parsersProvider()
    {
        return [
            [ $this->createParser() ]
        ];
    }

    /**
     * @return StdClass
     */
    protected function getObject()
    {
        $std = new StdClass;

        $std->a = 'A';
        $std->b = new StdClass;
        $std->c = [];

        $std->b->a = [];
        $std->b->b = 4;
        $std->b->c = null;

        return $std;
    }

    /**
     * @return string
     */
    protected function getString()
    {
        return '{"a":"A","b":{"a":[],"b":4,"c":null},"c":[]}';
    }

    /**
     * @param int $flags
     * @return NullParser
     */
    protected function createParser()
    {
        return new NullParser();
    }
}
