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
        'name' => 'Test Example',
        'generator' => function() {
            return [Generator::getScalar()];
        },
        'tests' => [
            'is_string($v)' => function($v) {
                return is_string($v);
            },

            'is_bool($v)' => function($v) {
                return is_bool($v);
            },

            'is_int($v)' => function($v) {
                return is_int($v);
            },
        ],
    ],

];
