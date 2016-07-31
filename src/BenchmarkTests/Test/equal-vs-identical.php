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
        'name' => 'Equal (==) va Identical (===) for %s',
        'generator' => [
            'integers' => function($i) {
                return [mt_rand(0, 1) + $i, mt_rand(0, 1) + $i];
            },
            'strings' => function($i) {
                return [md5(mt_rand(0, 1) + $i), md5(mt_rand(0, 1) + $i)];
            },
            'mixed' => function($i) {
                return [Generator::getScalar(), Generator::getScalar()];
            },
        ],
        'tests' => [

            'int: $i == $j' => function($i, $j) {
                return $i == $j;
            },

            'int: $i === $j' => function($i, $j) {
                return $i === $j;
            },

        ],
    ],

];
