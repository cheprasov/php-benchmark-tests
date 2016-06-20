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
     * @param string $dir
     * @param string[] $argv
     */
    public static function run($dir, array $argv) {
        $files = self::getTests($dir, empty($argv[1]) ? null : $argv[1]);
        foreach ($files as $file) {
            echo PHP_EOL . $file;
            $tests = include($file);
            foreach ($tests as $test) {
                self::runTest($test['name'], $test['tests']);
            }
        }
    }

    /**
     * @param string $dir
     * @param string|null $preg
     * @return array
     */
    protected static function getTests($dir, $preg = null) {
        $files = array_filter(scandir($dir), function($file) use ($preg, $dir) {
            return is_file($dir .'/'. $file) && (!$preg || preg_match('/'.$preg.'/', $file));
        });
        return array_map(function($file) use ($dir) {
            return $dir .'/'. $file;
        }, $files);
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

}
