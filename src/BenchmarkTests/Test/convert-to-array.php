<?php

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
