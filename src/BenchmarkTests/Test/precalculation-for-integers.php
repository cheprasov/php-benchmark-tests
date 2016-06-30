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
        'name' => 'Precalculation for Integers #1',
        'tests' => [

            '$i / 1048576' => function($i) {
                return $i / 1048576;
            },

            '$i / 1024 / 1024' => function($i) {
                return $i / 1024 / 1024;
            },

        ],
    ],

    [
        'name' => 'Precalculation for Integers #2',
        'tests' => [

            '$i > 1048576' => function($i) {
                return $i > 1048576;
            },

            '$i > 1024 * 1024' => function($i) {
                return $i > 1024 * 1024;
            },

        ],
    ],

];
