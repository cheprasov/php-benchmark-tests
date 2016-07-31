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
        'name' => 'Sprintf vs Single and Double Quotes',
        'generator' => function() {
            return [
                Generator::getScalar(),
                Generator::getScalar(),
            ];
        },
        'tests' => [
            'sprintf' => function($i, $j) {
                return sprintf('%s:%s:%s%s', $i, $j, $i, $j);
            },
            'single quotes' => function($i, $j) {
                return $i . ':' . $j . ':' . $i . $j;
            },
            'double quotes' => function($i, $j) {
                return "$i:$j:$i$j";
            },
        ],
    ],

];
