[![MIT license](http://img.shields.io/badge/license-MIT-brightgreen.svg)](http://opensource.org/licenses/MIT)

Benchmark tests for PHP
=========
Tests in development

## How to run

```
> php ./run.php
```
result:

```
+-------------------------------------+---------------+-------+------------------+---------------------+-------+
| GROUP                               | NAME          | COUNT | TIME             | SINGLE              | COST  |
+-------------------------------------+---------------+-------+------------------+---------------------+-------+
| Sprintf vs Single and Double Quotes | sprintf       | 1000  | 0.52887535095215 | 0.00052887535095215 | 127 % |
| Sprintf vs Single and Double Quotes | single quotes | 1000  | 0.43020057678223 | 0.00043020057678223 | 103 % |
| Sprintf vs Single and Double Quotes | double quotes | 1000  | 0.41784405708313 | 0.00041784405708313 | 100 % |
+-------------------------------------+---------------+-------+------------------+---------------------+-------+

+---------------------------+------------------+-------+------------------+---------------------+-------+
| GROUP                     | NAME             | COUNT | TIME             | SINGLE              | COST  |
+---------------------------+------------------+-------+------------------+---------------------+-------+
| Strlen vs === (not empty) | strlen($a) < 1   | 1000  | 0.30596613883972 | 0.00030596613883972 | 129 % |
| Strlen vs === (not empty) | strlen($a) === 0 | 1000  | 0.3094961643219  | 0.0003094961643219  | 130 % |
| Strlen vs === (not empty) | $a === ''        | 1000  | 0.23724412918091 | 0.00023724412918091 | 100 % |
+---------------------------+------------------+-------+------------------+---------------------+-------+

+-----------------------+------------------+-------+------------------+---------------------+-------+
| GROUP                 | NAME             | COUNT | TIME             | SINGLE              | COST  |
+-----------------------+------------------+-------+------------------+---------------------+-------+
| Strlen vs === (empty) | strlen($a) < 1   | 1000  | 0.19326639175415 | 0.00019326639175415 | 140 % |
| Strlen vs === (empty) | strlen($a) === 0 | 1000  | 0.19543981552124 | 0.00019543981552124 | 142 % |
| Strlen vs === (empty) | $a === ''        | 1000  | 0.13802218437195 | 0.00013802218437195 | 100 % |
+-----------------------+------------------+-------+------------------+---------------------+-------+
```

## Installation

### Composer

Download composer:

    wget -nc http://getcomposer.org/composer.phar

and add dependency to your project:

    php composer.phar cheprasov/php-simple-profiler

## Something doesn't work

Feel free to fork project, fix bugs and finally request for pull
