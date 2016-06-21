<?php

const EOL = "\r\n";
const EOL_LONG = "\r\n \r\n \r\n \r\n \r\n";

return [

    [
        'name' => 'Constant vs Quotes',
        'tests' => [

            '$i . "\r\n"' => function($i) {
                return $i . "\r\n";
            },

            '$i . EOL' => function($i) {
                return $i . EOL;
            },

            '$i . "\r\n \r\n \r\n \r\n \r\n"' => function($i) {
                return $i . "\r\n \r\n \r\n \r\n \r\n";
            },

            '$i . EOL_LONG' => function($i) {
                return $i . EOL_LONG;
            },

        ],
    ],


];
