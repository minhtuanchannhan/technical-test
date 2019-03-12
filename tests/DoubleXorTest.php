<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\DoubleXor;

/**
 * Class DoubleXorTest
 * @package Tests
 */
class DoubleXorTest extends TestCase
{
    /**
     * @param $number
     * @param $expected
     * @dataProvider providerTestDoubleXorOfNumberIsEquals
     */
    public function testDoubleXorOfNumberIsEquals($number, $expected)
    {
        $doubleXor = new DoubleXor();
        $result = $doubleXor->calculate($number);
        $this->assertEquals($expected, $result);
    }

    /**
     * @return array
     */
    public function providerTestDoubleXorOfNumberIsEquals()
    {
        return [
            [1, 1],
            [2, 3],
            [7, 0],
            [10, 11],
            [102, 103]
        ];
    }
}
