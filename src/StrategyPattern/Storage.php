<?php

declare(strict_types=1);

namespace DesignPattern\StrategyPattern;

class Storage implements StorageInterface
{
    private StorageInterface $storageAdapter;

    public function __construct(StorageInterface $storageStrategy)
    {
        $this->storageAdapter = $storageStrategy;
    }

    public function store(string $file): bool
    {
        return $this->storageAdapter->store($file);
    }
}
