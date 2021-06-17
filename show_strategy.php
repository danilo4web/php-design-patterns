<?php declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use DesignPattern\StrategyPattern;

try {
    /** @var DesignPattern\StrategyPattern $demoClass */
    $demoClass = new StrategyPattern();
    $demoClass->storeFiles($argv[1]);
} catch (Exception $e) {
    echo $e->getMessage();
}