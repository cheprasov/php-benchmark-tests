<?php
/**
 * This file is part of RedisClient.
 * git: https://github.com/cheprasov/php-benchmark-tests
 *
 * (C) Alexander Cheprasov <cheprasov.84@ya.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace BenchmarkTests;

class Generator {

    /**
     * Generate scalars
     * @return array
     */
    public static function getScalar() {
        switch ($i = mt_rand(0, 5)) {
            case 0: return $i;
            case 1: return md5($i);
            case 2: return $i . M_PI;
            case 3: return (bool) $i;
        }
        return null;
    }

    /**
     * Generate integer as string
     *
     * @param int $max
     * @return array
     */
    public static function getNumberInString($max = 100) {
        return (string) mt_rand(0, $max);
    }
}
