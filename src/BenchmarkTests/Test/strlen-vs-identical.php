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
        'name' => 'strlen() vs Identical (===)',
        'generator' => function($i) {
            return [$i % 2 ? md5($i) : ''];
        },
        'tests' => [

            'strlen($s) === 0' => function($s) {
                return strlen($s) === 0;
            },

            'strlen($s) < 1' => function($s) {
                return strlen($s) < 1;
            },

            '$s === \'\'' => function($s) {
                return $s === '';
            },
        ],
    ],

];
