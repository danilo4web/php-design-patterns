<?php

declare(strict_types=1);

namespace DesignPattern\StrategyPattern;

class Storage implements StorageInterface
{
    private StorageInterface $storageAdapter;

    public function __construct(StorageInterface $storageAdapter)
    {
        $this->storageAdapter = $storageAdapter;
    }

    public function store(string $file): bool
    {
        return $this->storageAdapter->store($file);
    }
}
