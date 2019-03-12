<?php

namespace App;

/**
 * Class TerrainLeveling
 * @package App
 */
class TerrainLeveling
{
    /**
     * @param string $area
     * @return int
     */
    public function getMinimum(string $area): int
    {
        $count = INF;
        $area_arg = explode(',', $area);

        for ($n = 0; $n < 9; $n++) {
            $leveled_time = 0;

            for ($i = 0; $i < count($area_arg); $i++) {
                for ($j = 0; $j < strlen($area_arg[0]); $j++) {
                    $leveled_time += min(abs($area_arg[$i][$j] - $n), abs($area_arg[$i][$j] - $n - 1));
                }
            }

            $count = min($count, $leveled_time);
        }

        return $count;
    }
}
