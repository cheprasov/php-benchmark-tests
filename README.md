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
/home/linl/git/php-benchmark-tests/src/BenchmarkTests/Test/constant-vs-quotes.php
+--------------------+---------------------------------+-------+------------------+---------------------+-------+
| GROUP              | NAME                            | COUNT | TIME             | SINGLE              | COST  |
+--------------------+---------------------------------+-------+------------------+---------------------+-------+
| Constant vs Quotes | $i . EOL                        | 1000  | 0.41710495948792 | 0.00041710495948792 | 103 % |
| Constant vs Quotes | $i . EOL_LONG                   | 1000  | 0.41718411445618 | 0.00041718411445618 | 103 % |
| Constant vs Quotes | $i . "\r\n"                     | 1000  | 0.40638947486877 | 0.00040638947486877 | 100 % |
| Constant vs Quotes | $i . "\r\n \r\n \r\n \r\n \r\n" | 1000  | 0.40848708152771 | 0.00040848708152771 | 101 % |
+--------------------+---------------------------------+-------+------------------+---------------------+-------+

/home/linl/git/php-benchmark-tests/src/BenchmarkTests/Test/convert-to-array.php
+---------------------------+--------------------------+-------+------------------+---------------------+-------+
| GROUP                     | NAME                     | COUNT | TIME             | SINGLE              | COST  |
+---------------------------+--------------------------+-------+------------------+---------------------+-------+
| Convert to array (random) | [$v]                     | 1000  | 0.38771343231201 | 0.00038771343231201 | 100 % |
| Convert to array (random) | (array) $v               | 1000  | 0.4150722026825  | 0.0004150722026825  | 107 % |
| Convert to array (random) | is_array($v) ? $v : [$v] | 1000  | 0.45703625679016 | 0.00045703625679016 | 118 % |
+---------------------------+--------------------------+-------+------------------+---------------------+-------+

+--------------------------+--------------------------+-------+------------------+---------------------+-------+
| GROUP                    | NAME                     | COUNT | TIME             | SINGLE              | COST  |
+--------------------------+--------------------------+-------+------------------+---------------------+-------+
| Convert to array (array) | [$v]                     | 1000  | 0.39331221580505 | 0.00039331221580505 | 100 % |
| Convert to array (array) | (array) $v               | 1000  | 0.48817706108093 | 0.00048817706108093 | 124 % |
| Convert to array (array) | is_array($v) ? $v : [$v] | 1000  | 0.54360365867615 | 0.00054360365867615 | 138 % |
+--------------------------+--------------------------+-------+------------------+---------------------+-------+

/home/linl/git/php-benchmark-tests/src/BenchmarkTests/Test/convert-to-integer.php
+--------------------+----------+-------+------------------+---------------------+-------+
| GROUP              | NAME     | COUNT | TIME             | SINGLE              | COST  |
+--------------------+----------+-------+------------------+---------------------+-------+
| Convert to integer | $s * 1   | 1000  | 0.36551928520203 | 0.00036551928520203 | 104 % |
| Convert to integer | $s + 0   | 1000  | 0.36287307739258 | 0.00036287307739258 | 103 % |
| Convert to integer | $s - 0   | 1000  | 0.36454701423645 | 0.00036454701423645 | 104 % |
| Convert to integer | $s << 0  | 1000  | 0.35259008407593 | 0.00035259008407593 | 100 % |
| Convert to integer | $s >> 0  | 1000  | 0.35519456863403 | 0.00035519456863403 | 101 % |
| Convert to integer | (int) $s | 1000  | 0.37221813201904 | 0.00037221813201904 | 106 % |
| Convert to integer | $s | 0   | 1000  | 0.35157656669617 | 0.00035157656669617 | 100 % |
+--------------------+----------+-------+------------------+---------------------+-------+

/home/linl/git/php-benchmark-tests/src/BenchmarkTests/Test/convert-to-string.php
+-------------------+-------------+-------+------------------+---------------------+-------+
| GROUP             | NAME        | COUNT | TIME             | SINGLE              | COST  |
+-------------------+-------------+-------+------------------+---------------------+-------+
| Convert to string | "$i"        | 1000  | 0.40467405319214 | 0.00040467405319214 | 105 % |
| Convert to string | $i.''       | 1000  | 0.40741682052612 | 0.00040741682052612 | 106 % |
| Convert to string | (string) $i | 1000  | 0.38529706001282 | 0.00038529706001282 | 100 % |
+-------------------+-------------+-------+------------------+---------------------+-------+

/home/linl/git/php-benchmark-tests/src/BenchmarkTests/Test/equal-vs-identical.php
+---------------------------------------+----------------+-------+------------------+---------------------+-------+
| GROUP                                 | NAME           | COUNT | TIME             | SINGLE              | COST  |
+---------------------------------------+----------------+-------+------------------+---------------------+-------+
| Equal (==) va Identical (===) for Int | int: $i == $j  | 1000  | 0.3842134475708  | 0.0003842134475708  | 100 % |
| Equal (==) va Identical (===) for Int | int: $i === $j | 1000  | 0.38378810882568 | 0.00038378810882568 | 100 % |
+---------------------------------------+----------------+-------+------------------+---------------------+-------+

+------------------------------------------+-------------------+-------+------------------+---------------------+-------+
| GROUP                                    | NAME              | COUNT | TIME             | SINGLE              | COST  |
+------------------------------------------+-------------------+-------+------------------+---------------------+-------+
| Equal (==) va Identical (===) for String | string: $a == $b  | 1000  | 0.52778053283691 | 0.00052778053283691 | 105 % |
| Equal (==) va Identical (===) for String | string: $a === $b | 1000  | 0.50451850891113 | 0.00050451850891113 | 100 % |
+------------------------------------------+-------------------+-------+------------------+---------------------+-------+

+-----------------------------------------+-----------+-------+------------------+---------------------+-------+
| GROUP                                   | NAME      | COUNT | TIME             | SINGLE              | COST  |
+-----------------------------------------+-----------+-------+------------------+---------------------+-------+
| Equal (==) va Identical (===) for mixed | $a == $j  | 1000  | 0.4508969783783  | 0.0004508969783783  | 106 % |
| Equal (==) va Identical (===) for mixed | $a === $b | 1000  | 0.42399144172668 | 0.00042399144172668 | 100 % |
+-----------------------------------------+-----------+-------+------------------+---------------------+-------+

/home/linl/git/php-benchmark-tests/src/BenchmarkTests/Test/precalculation-for-integers.php
+--------------------------------+------------------+-------+------------------+---------------------+-------+
| GROUP                          | NAME             | COUNT | TIME             | SINGLE              | COST  |
+--------------------------------+------------------+-------+------------------+---------------------+-------+
| Precalculation for Integers #1 | $i / 1048576     | 1000  | 0.34092354774475 | 0.00034092354774475 | 100 % |
| Precalculation for Integers #1 | $i / 1024 / 1024 | 1000  | 0.34783577919006 | 0.00034783577919006 | 102 % |
+--------------------------------+------------------+-------+------------------+---------------------+-------+

+--------------------------------+------------------+-------+------------------+---------------------+-------+
| GROUP                          | NAME             | COUNT | TIME             | SINGLE              | COST  |
+--------------------------------+------------------+-------+------------------+---------------------+-------+
| Precalculation for Integers #2 | $i > 1048576     | 1000  | 0.32988786697388 | 0.00032988786697388 | 100 % |
| Precalculation for Integers #2 | $i > 1024 * 1024 | 1000  | 0.33342123031616 | 0.00033342123031616 | 101 % |
+--------------------------------+------------------+-------+------------------+---------------------+-------+

/home/linl/git/php-benchmark-tests/src/BenchmarkTests/Test/sprintf-vs-quotes.php
+-------------------------------------+---------------+-------+------------------+---------------------+-------+
| GROUP                               | NAME          | COUNT | TIME             | SINGLE              | COST  |
+-------------------------------------+---------------+-------+------------------+---------------------+-------+
| Sprintf vs Single and Double Quotes | sprintf       | 1000  | 0.67730140686035 | 0.00067730140686035 | 125 % |
| Sprintf vs Single and Double Quotes | single quotes | 1000  | 0.56266379356384 | 0.00056266379356384 | 104 % |
| Sprintf vs Single and Double Quotes | double quotes | 1000  | 0.5415198802948  | 0.0005415198802948  | 100 % |
+-------------------------------------+---------------+-------+------------------+---------------------+-------+

/home/linl/git/php-benchmark-tests/src/BenchmarkTests/Test/strlen-vs-identical.php
+-----------------------------+------------------+-------+------------------+---------------------+-------+
| GROUP                       | NAME             | COUNT | TIME             | SINGLE              | COST  |
+-----------------------------+------------------+-------+------------------+---------------------+-------+
| strlen() vs Identical (===) | strlen($s) === 0 | 1000  | 0.38777375221252 | 0.00038777375221252 | 116 % |
| strlen() vs Identical (===) | strlen($s) < 1   | 1000  | 0.38764381408691 | 0.00038764381408691 | 116 % |
| strlen() vs Identical (===) | $s === ''        | 1000  | 0.33559370040894 | 0.00033559370040894 | 100 % |
+-----------------------------+------------------+-------+------------------+---------------------+-------+

/home/linl/git/php-benchmark-tests/src/BenchmarkTests/Test/test-example.php
+--------------+---------------+-------+------------------+---------------------+-------+
| GROUP        | NAME          | COUNT | TIME             | SINGLE              | COST  |
+--------------+---------------+-------+------------------+---------------------+-------+
| Test Example | is_string($v) | 1000  | 0.36974000930786 | 0.00036974000930786 | 100 % |
| Test Example | is_bool($v)   | 1000  | 0.37087035179138 | 0.00037087035179138 | 100 % |
| Test Example | is_int($v)    | 1000  | 0.3696653842926  | 0.0003696653842926  | 100 % |
+--------------+---------------+-------+------------------+---------------------+-------+
```

## Installation

### Composer

Download composer:

    wget -nc http://getcomposer.org/composer.phar

and add dependency to your project:

    php composer.phar cheprasov/php-simple-profiler

## Something doesn't work

Feel free to fork project, fix bugs and finally request for pull
