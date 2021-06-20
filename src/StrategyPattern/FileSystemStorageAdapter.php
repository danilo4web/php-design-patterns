<?php

declare(strict_types=1);

namespace DesignPattern\StrategyPattern;

class FileSystemStorageAdapter implements StorageInterface
{
    public function store(string $file): bool
    {
        return true;
    }
}
