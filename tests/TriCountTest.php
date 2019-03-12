<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\TriCount;

/**
 * Class TriCountTest
 * @package Tests
 */
class TriCountTest extends TestCase
{
    /**
     * @param $minLength
     * @param $maxLength
     * @param $expected
     * @dataProvider providerTestNumberOfTrianglesIsEquals
     */
    public function testNumberOfTrianglesIsEquals($minLength, $maxLength, $expected)
    {
        $triCount = new TriCount();
        $result = $triCount->count($minLength, $maxLength);
        $this->assertEquals($expected, $result);
    }

    /**
     * @return array
     */
    public function providerTestNumberOfTrianglesIsEquals()
    {
        return [
            [1, 2, 3],
            [9, 10, 4],
            [1, 1000000, -1],
            [19, 1000, 83540657]
        ];
    }
}
