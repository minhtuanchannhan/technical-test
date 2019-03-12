<?php

namespace App;

/**
 * Class DoubleXor
 * @package App
 */
class DoubleXor
{
    /**
     * @param int $n
     * @return int
     */
    public function calculate(int $n): int
    {
        $res = $n;

        while (--$n) {
            $res = $this->getResult($res, $n);
        }

        return $res;
    }

    /**
     * @param int $x
     * @param int $y
     * @return float|int
     */
    public function getResult(int $x, int $y)
    {
        if ($x == 0 && $y == 0) {
            return 0;
        }

        return $this->getResult($x / 10, $y / 10) * 10 + (($x % 10) ^ ($y % 10)) % 10;
    }
}
