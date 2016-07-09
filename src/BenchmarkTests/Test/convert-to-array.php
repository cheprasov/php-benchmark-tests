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
        'name' => 'Convert to array (random)',
        'generator' => function($i) {
            switch ($i % 5) {
                case 0: return [$i];
                case 1: return [(string) $i];
                case 2: return [$i . M_PI];
                case 3: return [(bool) $i];
                case 4: return [[$i, ++$i]];
            }
            return [null];
        },
        'tests' => [
            '[$v]' => function($v) {
                return [$v];
            },

            '(array) $v' => function($v) {
                return (array) $v;
            },

            'is_array($v) ? $v : [$v]' => function($v) {
                return is_array($v) ? $v : [$v];
            },
        ],
    ],

    [
        'name' => 'Convert to array (array)',
        'generator' => function($i) {
            return [array_fill(0, mt_rand(0, 10), $i)];
        },
        'tests' => [
            '[$v]' => function($v) {
                return [$v];
            },

            '(array) $v' => function($v) {
                return (array) $v;
            },

            'is_array($v) ? $v : [$v]' => function($v) {
                return is_array($v) ? $v : [$v];
            },
        ],
    ],

];
