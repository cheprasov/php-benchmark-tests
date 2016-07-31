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
        'name' => 'Convert to string',
        'tests' => [
            '"$i"' => function($i) {
                return "$i";
            },

            '$i.\'\'' => function($i) {
                return $i.'';
            },

            'strval($i)' => function($i) {
                return strval($i);
            },

            '(string) $i' => function($i) {
                return (string) $i;
            },
        ],
    ],

];
