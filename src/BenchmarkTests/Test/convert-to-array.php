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
        'name' => 'Convert to array',
        'tests' => [
            '[$a]' => function($i, $j) {
                $a = $i.$j;
                return [$a];
            },

            '(array) $a' => function($i, $j) {
                $a = $i.$j;
                return (array) $a;
            },
        ],
    ],

];
