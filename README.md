[![MIT license](http://img.shields.io/badge/license-MIT-brightgreen.svg)](http://opensource.org/licenses/MIT)

Benchmark tests for PHP
=========
Tests in development

## How to run

```
> php ./run.php [regexp for test name]
```
result:

```
/home/linl/git/php-benchmark-tests/src/BenchmarkTests/Test/convert-to-array.php
+------------------+------------+-------+------------------+---------------------+-------+
| GROUP            | NAME       | COUNT | TIME             | SINGLE              | COST  |
+------------------+------------+-------+------------------+---------------------+-------+
| Convert to array | [$a]       | 1000  | 0.31334352493286 | 0.00031334352493286 | 100 % |
| Convert to array | (array) $a | 1000  | 0.34963941574097 | 0.00034963941574097 | 112 % |
+------------------+------------+-------+------------------+---------------------+-------+

/home/linl/git/php-benchmark-tests/src/BenchmarkTests/Test/sprintf-vs-quotes.php
+-------------------------------------+---------------+-------+------------------+---------------------+-------+
| GROUP                               | NAME          | COUNT | TIME             | SINGLE              | COST  |
+-------------------------------------+---------------+-------+------------------+---------------------+-------+
| Sprintf vs Single and Double Quotes | sprintf       | 1000  | 0.51484990119934 | 0.00051484990119934 | 123 % |
| Sprintf vs Single and Double Quotes | single quotes | 1000  | 0.43221712112427 | 0.00043221712112427 | 103 % |
| Sprintf vs Single and Double Quotes | double quotes | 1000  | 0.4180371761322  | 0.0004180371761322  | 100 % |
+-------------------------------------+---------------+-------+------------------+---------------------+-------+

/home/linl/git/php-benchmark-tests/src/BenchmarkTests/Test/strlen-vs-identical.php
+-----------------------------------+------------------+-------+------------------+---------------------+-------+
| GROUP                             | NAME             | COUNT | TIME             | SINGLE              | COST  |
+-----------------------------------+------------------+-------+------------------+---------------------+-------+
| strlen() vs Identical (not empty) | strlen($a) < 1   | 1000  | 0.31903648376465 | 0.00031903648376465 | 122 % |
| strlen() vs Identical (not empty) | strlen($a) === 0 | 1000  | 0.32491397857666 | 0.00032491397857666 | 124 % |
| strlen() vs Identical (not empty) | $a === ''        | 1000  | 0.26161336898804 | 0.00026161336898804 | 100 % |
+-----------------------------------+------------------+-------+------------------+---------------------+-------+

+-------------------------------+------------------+-------+------------------+---------------------+-------+
| GROUP                         | NAME             | COUNT | TIME             | SINGLE              | COST  |
+-------------------------------+------------------+-------+------------------+---------------------+-------+
| strlen() vs Identical (empty) | strlen($a) < 1   | 1000  | 0.16932582855225 | 0.00016932582855225 | 148 % |
| strlen() vs Identical (empty) | strlen($a) === 0 | 1000  | 0.17087531089783 | 0.00017087531089783 | 149 % |
| strlen() vs Identical (empty) | $a === ''        | 1000  | 0.11454033851624 | 0.00011454033851624 | 100 % |
+-------------------------------+------------------+-------+------------------+---------------------+-------+

+-----------------------------+------------------+-------+------------------+---------------------+-------+
| GROUP                       | NAME             | COUNT | TIME             | SINGLE              | COST  |
+-----------------------------+------------------+-------+------------------+---------------------+-------+
| strlen() vs Identical (mix) | strlen($a) < 1   | 1000  | 0.24134588241577 | 0.00024134588241577 | 131 % |
| strlen() vs Identical (mix) | strlen($a) === 0 | 1000  | 0.24124550819397 | 0.00024124550819397 | 131 % |
| strlen() vs Identical (mix) | $a === ''        | 1000  | 0.18408703804016 | 0.00018408703804016 | 100 % |
+-----------------------------+------------------+-------+------------------+---------------------+-------+
```

## Installation

### Composer

Download composer:

    wget -nc http://getcomposer.org/composer.phar

and add dependency to your project:

    php composer.phar cheprasov/php-simple-profiler

## Something doesn't work

Feel free to fork project, fix bugs and finally request for pull
