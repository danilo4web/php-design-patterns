<?php declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use DesignPattern\BuilderPattern\FrameworkFullBuilder;

try {
    $framework = (new FrameworkFullBuilder())->getFramework()->run();
} catch (Exception $e) {
    error_log($e->getMessage());
}
