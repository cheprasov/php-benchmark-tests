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
        'name' => 'Equal (==) va Identical (===) for Int',
        'generator' => function($i) {
            return [
                mt_rand(0, 1) + $i,
                mt_rand(0, 1) + $i
            ];
        },
        'tests' => [

            'int: $i == $j' => function($i, $j) {
                return $i == $j;
            },

            'int: $i === $j' => function($i, $j) {
                return $i === $j;
            },

        ],
    ],

    [
        'name' => 'Equal (==) va Identical (===) for String',
        'generator' => function($i) {
            return [
                md5(mt_rand(0, 1) + $i),
                md5(mt_rand(0, 1) + $i)
            ];
        },
        'tests' => [

            'string: $a == $b' => function($i, $j) {
                $a = (string) $i;
                $b = (string) $j;
                return $a == $b;
            },

            'string: $a === $b' => function($i, $j) {
                $a = (string) $i;
                $b = (string) $j;
                return $a === $b;
            },

        ],
    ],

    [
        'name' => 'Equal (==) va Identical (===) for mixed',
        'generator' => function() {
            return [
                Generator::scalar(),
                Generator::scalar()
            ];
        },
        'tests' => [

            '$a == $j' => function($i, $j) {
                $a = (string) $i;
                return $a == $j;
            },

            '$a === $b' => function($i, $j) {
                $a = (string) $i;
                return $a === $j;
            },

        ],
    ],

];
