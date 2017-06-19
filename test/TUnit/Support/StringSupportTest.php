<?php

namespace Dazzle\Util\Test\TUnit\Support;

use Dazzle\Util\Test\TUnit\Support\_Mock\StringSupportMock;
use Dazzle\Util\Support\StringSupport;
use Dazzle\Util\Test\TUnit;

class StringSupportTest extends TUnit
{
    /**
     *
     */
    public function testApiParametrize_ReplacesParametersWithValues()
    {
        $str = $this->createStringSupportMock();

        $before = 'I have %item1% and %item2%.';
        $after  = 'I have bananas and apples.';

        $this->assertEquals($after, $str::parametrize($before, [
            'item1' => 'bananas',
            'item2' => 'apples'
        ]));
    }

    /**
     *
     */
    public function testApiMatch_MatchesSimpleRegexps()
    {
        $str = $this->createStringSupportMock();

        $this->assertTrue($str::match($this->getGrayPattern(), "lightgray"));
    }

    /**
     *
     */
    public function testApiFind_FiltersAndReturnsMatchedEntries_ForSinglePattern()
    {
        $str = $this->createStringSupportMock();

        $entries = $this->getColorEntries();
        $expected = $this->getExpectedColors();

        $this->assertSame(
            $expected,
            $str::findOne($this->getGrayPattern(), $entries)
        );
    }

    /**
     *
     */
    public function testApiFindFew_FiltersAndReturnsMatchedEntries_ForMultiplePatterns()
    {
        $str = $this->createStringSupportMock();

        $entries = $this->getColorEntries();
        $expected = $this->getExpectedColorsWithBlack();

        $patterns = [
            $this->getGrayPattern(),
            "black"
        ];

        $this->assertSame(
            $expected,
            $str::findFew($patterns, $entries)
        );
    }

    /**
     *
     */
    public function testApiFindOne_FiltersAndReturnsMatchedEntries()
    {
        $str = $this->createStringSupportMock();

        $entries = $this->getColorEntries();
        $expected = $this->getExpectedColors();

        $this->assertSame(
            $expected,
            $str::findOne($this->getGrayPattern(), $entries)
        );
    }

    /**
     *
     */
    public function testApiFindFew_FiltersAndReturnsMatchedEntries()
    {
        $str = $this->createStringSupportMock();

        $entries = $this->getColorEntries();
        $expected = $this->getExpectedColorsWithBlack();

        $patterns = [
            $this->getGrayPattern(),
            "black"
        ];

        $this->assertSame(
            $expected,
            $str::findFew($patterns, $entries)
        );
    }

    /**
     * @return string[]
     */
    public function getColorEntries()
    {
        return [
            "darkgray",
            "black",
            "grayish",
            "griy",
            "red",
            "some kind of gray"
        ];
    }

    /**
     * @return string[]
     */
    public function getExpectedColors()
    {
        return [
            "darkgray",
            "some kind of gray"
        ];
    }

    /**
     * @return string[]
     */
    public function getExpectedColorsWithBlack()
    {
        return [
            "darkgray",
            "black",
            "some kind of gray"
        ];
    }

    /**
     * @return string
     */
    public function getGrayPattern()
    {
        return "*gr[ae]y";
    }

    /**
     * @return StringSupport
     */
    public function createStringSupportMock()
    {
        return new StringSupportMock();
    }
}
