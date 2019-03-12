<?php

namespace App;

/**
 * Class TriCount
 * @package App
 */
class TriCount
{
    /**
     * @param int $minLength
     * @param int $maxLength
     * @return int
     */
    public function count(int $minLength, int $maxLength): int
    {
        $count = 0;

        for ($i = $minLength; $i <= $maxLength; $i++) {
            for ($j = $i; $j <= $maxLength; $j++) {
                $count += min($i + $j - 1, $maxLength) - $j + 1;

                if ($count > 1000000000) {
                    return -1;
                }
            }
        }

        return $count;
    }
}
