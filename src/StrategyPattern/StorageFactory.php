<?php

declare(strict_types=1);

namespace DesignPattern\StrategyPattern;

use InvalidArgumentException;

class StorageFactory
{
    public function build(string $storageService): Storage
    {
        $storageStrategy = __NAMESPACE__ . '\\' . $storageService . 'StorageStrategy';

        if (!class_exists($storageStrategy)) {
            throw new InvalidArgumentException("$storageStrategy does not exist");
        }

        return new Storage(new $storageStrategy());
    }
}
