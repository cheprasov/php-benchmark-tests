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

const EOL = "\r\n";
const EOL_LONG = "\r\n \r\n \r\n \r\n \r\n";

return [

    [
        'name' => 'Constant vs Quotes',
        'tests' => [

            '$i . EOL' => function($i) {
                return $i . EOL;
            },

            '$i . EOL_LONG' => function($i) {
                return $i . EOL_LONG;
            },

            '$i . "\r\n"' => function($i) {
                return $i . "\r\n";
            },

            '$i . "\r\n \r\n \r\n \r\n \r\n"' => function($i) {
                return $i . "\r\n \r\n \r\n \r\n \r\n";
            },

        ],
    ],


];
