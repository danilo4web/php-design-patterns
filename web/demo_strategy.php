<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use DesignPattern\StrategyPattern\StorageFactory;

try {
    $file = '/home/danilo/remetentes.csv';

    $myFactoryMethod = new StorageFactory();
    $myStorage = $myFactoryMethod->build("FileSystem");
    $myStorage->store($file);
} catch (Exception $e) {
    echo $e->getMessage();
}