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
        'name' => 'strlen() vs Identical (not empty)',
        'tests' => [
            'strlen($a) < 1' => function($i, $j) {
                $a = $i.$j;
                return strlen($a) < 1;
            },

            'strlen($a) === 0' => function($i, $j) {
                $a = $i.$j;
                return strlen($a) === 0;
            },

            '$a === \'\'' => function($i, $j) {
                $a = $i.$j;
                return $a === '';
            },

        ],
    ],

    [
        'name' => 'strlen() vs Identical (empty)',
        'tests' => [
            'strlen($a) < 1' => function() {
                $a = '';
                return strlen($a) < 1;
            },

            'strlen($a) === 0' => function() {
                $a = '';
                return strlen($a) === 0;
            },

            '$a === \'\'' => function() {
                $a = '';
                return $a === '';
            },
        ],
    ],

    [
        'name' => 'strlen() vs Identical (mix)',
        'tests' => [
            'strlen($a) < 1' => function($i) {
                $a = $i % 2 ? 'Test some text'.$i : '';
                return strlen($a) < 1;
            },

            'strlen($a) === 0' => function($i) {
                $a = $i % 2 ? 'Test some text'.$i : '';
                return strlen($a) === 0;
            },

            '$a === \'\'' => function($i) {
                $a = $i % 2 ? 'Test some text'.$i : '';
                return $a === '';
            },
        ],
    ],
];
