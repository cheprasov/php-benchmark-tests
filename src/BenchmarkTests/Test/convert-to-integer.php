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

return [

    [
        'name' => 'Convert to integer',
        'tests' => [

            '$s * 1' => function($i, $j) {
                $s = $i . $j;
                return $s * 1;
            },

            '$s + 0' => function($i, $j) {
                $s = $i . $j;
                return $s + 0;
            },

            '$s - 0' => function($i, $j) {
                $s = $i . $j;
                return $s - 0;
            },

            '$s << 0' => function($i, $j) {
                $s = $i . $j;
                return $s << 0;
            },

            '$s >> 0' => function($i, $j) {
                $s = $i . $j;
                return $s >> 0;
            },

            '(int) $s' => function($i, $j) {
                $s = $i . $j;
                return (int) $s;
            },

            '$s | 0' => function($i, $j) {
                $s = $i . $j;
                return $s | 0;
            },
        ],
    ],

];
