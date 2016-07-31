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
        'name' => 'Convert to bool',
        'generator' => function() {
            return [Generator::getScalar()];
        },
        'tests' => [

            '!!$v' => function($v) {
                return !!$v;
            },

            '(bool) $v' => function($v) {
                return (bool) $v;
            },

            'boolval($v)' => function($v) {
                return boolval($v);
            },

            '$v || false' => function($v) {
                return $v || false;
            },

            '$v ? true : false' => function($v) {
                return $v ? true :
                    false;
            },

        ],
    ],

];
