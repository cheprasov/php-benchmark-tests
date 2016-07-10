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
        'name' => 'strpos vs equal',
        'generator' => function($i) {
            $s = str_repeat(md5($i), mt_rand(1, 5));
            return [
                $s,
                $s[$i % 2],
            ];
        },

        'tests' => [
            '0 === strpos($s, $s1)' => function($s, $s1) {
                return 0 === strpos($s, $s1);
            },

            '$s1 === $s[0]' => function($s, $s1) {
                return $s1 === $s[0];
            },
        ],
    ],

];
