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
        'name' => 'Operations: assignment (%s)',
        'generator' => [
           '$b & $c -> scalar' => function() {return [Generator::getScalar(), Generator::getScalar()];},
           '$b -> scalar, $c -> null' => function() {return [Generator::getScalar(), null];},
        ],
        'tests' => [
            'if ($b) {$a = $b;} else {$a = $c;}' => function($b, $c) {
                if ($b) {
                    $a = $b;
                } else {
                    $a = $c;
                }
                return $a;
            },

            '$a = $c; if ($b) {$a = $b;}' => function($b, $c) {
                $a = $c;
                if ($b) {
                    $a = $b;
                }
                return $a;
            },
        ],
    ],

];
