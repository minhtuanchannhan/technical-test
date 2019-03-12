<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\TerrainLeveling;

/**
 * Class TerrainLevelingTest
 * @package Tests
 */
class TerrainLevelingTest extends TestCase
{
    /**
     * @param $area
     * @param $expected
     * @dataProvider providerTestMinimumTotalLeveledAreaIsEquals
     */
    public function testMinimumTotalLeveledAreaIsEquals($area, $expected)
    {
        $terrainLeveling = new TerrainLeveling();
        $result = $terrainLeveling->getMinimum($area);
        $this->assertEquals($expected, $result);
    }

    /**
     * @return array
     */
    public function providerTestMinimumTotalLeveledAreaIsEquals()
    {
        return [
            ["10,31", 2],
            ["54454,61551", 7],
            ["989", 0],
            ["90", 8],
            ["5781252,2471255,0000291,1212489", 53]
        ];
    }
}
