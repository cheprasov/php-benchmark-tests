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
namespace BenchmarkTests;

use SimpleProfiler\Profiler;

class Benchmark {

    const TEST_METHOD_PREFIX = 'test';

    const DEFAULT_GLOBAL_ITERATIONS_COUNT = 1000;

    const DEFAULT_LOCAL_ITERATIONS_COUNT = 1000;

    /**
     *
     */
    public static function run() {
        $methods = get_class_methods(self::class);
        foreach ($methods as $method) {
            if (strpos($method, self::TEST_METHOD_PREFIX) !== 0) {
                continue;
            }
            call_user_func([self::class, $method]);
        }
    }

    /**
     * @param string $testName
     * @param \Closure[] $callbacks
     * @param int $globalCount
     * @param int $count
     */
    public static function runTest(
        $testName = null,
        array $callbacks,
        $globalCount = self::DEFAULT_GLOBAL_ITERATIONS_COUNT,
        $count = self::DEFAULT_LOCAL_ITERATIONS_COUNT
    ) {
        if (!$testName) {
            $testName = implode(' vs ', array_keys($callbacks));
        }
        Profiler::clear();
        for ($i = 0; $i < $globalCount; ++$i) {
            foreach($callbacks as $name => $callback) {
                Profiler::start($testName .'.'. $name);
                for ($j = 0; $j < $count; ++$j) {
                    $callback($i, $j);
                }
                Profiler::stop();
            }
        }
        Profiler::echoTimerStat();
    }

    /**
     * Sprintf vs Single and Double Quotes
     */
    public static function testSprintfVsQuotes() {
        self::runTest('Sprintf vs Single and Double Quotes', [
            'sprintf' => function($i, $j) {
                return sprintf('%s:%s:%s%s', $i, $j, $i, $j);
            },
            'single quotes' => function($i, $j) {
                return $i . ':' . $j . ':' . $i . $j;
            },
            'double quotes' => function($i, $j) {
                return "$i:$j:$i$j";
            },
        ]);
    }

    /**
     * Strlen($a) < 1 vs Strlen($a) === 0 vs $a === ''
     */
    public static function testStrlenVsSame() {
        self::runTest('Strlen vs === (not empty)', [
            'strlen($a) < 1' => function($i, $j) {
                return strlen($i.$j) < 1;
            },
            'strlen($a) === 0' => function($i, $j) {
                return strlen($i.$j) === 0;
            },
            '$a === \'\'' => function($i, $j) {
                return $i.$j === '';
            },
        ]);
        self::runTest('Strlen vs === (empty)', [
            'strlen($a) < 1' => function($i, $j) {
                $a = '';
                return strlen($a) < 1;
            },
            'strlen($a) === 0' => function($i, $j) {
                $a = '';
                return strlen($a) === 0;
            },
            '$a === \'\'' => function($i, $j) {
                $a = '';
                return $a === '';
            },
        ]);
    }

}
