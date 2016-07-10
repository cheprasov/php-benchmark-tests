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
        'name' => 'strpos vs substr',
        'generator' => function($i) {
            $s = str_repeat(md5($i), mt_rand(1, 5));
            $l = mt_rand(1
                , 10);
            return [
                $s,
                substr($s, $i % 2, $l),
                $l,
            ];
        },

        'tests' => [

            '$s1 === substr($s, $l)' => function($s, $s1, $l) {
                return $s1 === substr($s, 0, $l);
            },

            '0 === strpos($s, $s1)' => function($s, $s1, $l) {
                return 0 === strpos($s, $s1);
            },


        ],
    ],

];
