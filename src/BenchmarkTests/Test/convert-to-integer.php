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

use BenchmarkTests\Generator;

return [

    [
        'name' => 'Convert to integer',
        'generator' => function() {
            return [Generator::getNumberInString()];
        },
        'tests' => [

            '$s * 1' => function($s) {
                return $s * 1;
            },

            '$s + 0' => function($s) {
                return $s + 0;
            },

            '$s - 0' => function($s) {
                return $s - 0;
            },

            '$s << 0' => function($s) {
                return $s << 0;
            },

            '$s >> 0' => function($s) {
                return $s >> 0;
            },

            '(int) $s' => function($s) {
                return (int) $s;
            },

            'intval($s)' => function($s) {
                return intval($s);
            },

            '$s | 0' => function($s) {
                return $s | 0;
            },
        ],
    ],

];
