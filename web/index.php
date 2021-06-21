<?php declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use DesignPattern\FactoryPattern;

try {
    /** @var DesignPattern\FactoryPattern $demoClass */
    $demoClass = new FactoryPattern();
    $demoClass->show();
} catch (Exception $e) {
    echo $e->getMessage();
}