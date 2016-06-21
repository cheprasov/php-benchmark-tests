<?php

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
