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
        'name' => 'Equal (==) va Identical (===) for Int',
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
