<?php

return [

    [
        'name' => 'Convert to integer',
        'tests' => [

            '$s * 1' => function($i, $j) {
                $s = $i . $j;
                return $s * 1;
            },

            '$s + 0' => function($i, $j) {
                $s = $i . $j;
                return $s + 0;
            },

            '$s - 0' => function($i, $j) {
                $s = $i . $j;
                return $s - 0;
            },

            '$s < 0' => function($i, $j) {
                $s = $i . $j;
                return $s < 0;
            },

            '$s > 0' => function($i, $j) {
                $s = $i . $j;
                return $s > 0;
            },

            '(int) $s' => function($i, $j) {
                $s = $i . $j;
                return (int) $s;
            },

            '$s | 0' => function($i, $j) {
                $s = $i . $j;
                return $s | 0;
            },
        ],
    ],

];
