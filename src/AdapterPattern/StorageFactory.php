<?php

declare(strict_types=1);

namespace DesignPattern\AdapterPattern;

use InvalidArgumentException;

class StorageFactory
{
    public function build(string $storageService): Storage
    {
        $storageAdapter = __NAMESPACE__ . '\\' . $storageService . 'StorageAdapter';

        if (!class_exists($storageAdapter)) {
            throw new InvalidArgumentException("$storageAdapter does not exist");
        }

        return new Storage(new $storageAdapter());
    }
}
