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
require __DIR__.'/vendor/autoload.php';

use BenchmarkTests\Benchmark;

Benchmark::run(__DIR__.'/src/BenchmarkTests/Test', $argv);
