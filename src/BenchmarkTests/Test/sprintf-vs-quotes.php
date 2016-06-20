<?php

return [

    [
        'name' => 'Sprintf vs Single and Double Quotes',
        'tests' => [
            'sprintf' => function($i, $j) {
                return sprintf('%s:%s:%s%s', $i, $j, $i, $j);
            },
            'single quotes' => function($i, $j) {
                return $i . ':' . $j . ':' . $i . $j;
            },
            'double quotes' => function($i, $j) {
                return "$i:$j:$i$j";
            },
        ],
    ],

];
