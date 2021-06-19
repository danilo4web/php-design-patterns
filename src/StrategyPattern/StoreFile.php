<?php

declare(strict_types=1);

namespace DesignPattern\StrategyPattern;

class StoreFile
{
    /**
     * @var mixed
     */
    protected $storageClass;

    public function __construct($storageType)
    {
        $this->storageClass = StorageFactory::build($storageType);
    }

    /**
     * @param string $file
     * @return bool
     */
    public function store(string $file): boolean
    {
        return $this->storageClass->store($file);
    }
}
