<?php

return [

    [
        'name' => 'Convert to string',
        'tests' => [
            '"$i"' => function($i, $j) {
                return "$i";
            },

            '$i.\'\'' => function($i, $j) {
                return $i.'';
            },

            '(string) $i' => function($i, $j) {
                return (array) $i;
            },
        ],
    ],

];
