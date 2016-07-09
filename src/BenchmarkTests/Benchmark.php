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
                self::runTest($test);
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
     * @param array $test
     */
    public static function runTest(array $test) {
        $tests = &$test['tests'];

        $testName = !isset($test['name'])
            ? implode(' vs ', array_keys($tests))
            : $test['name'];

        $globalCount = isset($test['globalCount'])
            ? (int) $test['globalCount']
            : self::DEFAULT_GLOBAL_ITERATIONS_COUNT;

        $localCount = isset($test['localCount'])
            ? (int) $test['localCount']
            : self::DEFAULT_LOCAL_ITERATIONS_COUNT;

        $generator = isset($test['generator'])
            ? $test['generator']
            : function($i) {return [$i]; };

        Profiler::clear();

        for ($i = 0; $i < $globalCount; ++$i) {
            $testData = $generator($i);

            foreach($tests as $name => $callback) {
                Profiler::start($testName .'.'. $name);
                for ($j = 0; $j < $localCount; ++$j) {
                    call_user_func_array($callback, $testData);
                }
                Profiler::stop();
            }

        }

        Profiler::echoTimerStat();
    }

}
