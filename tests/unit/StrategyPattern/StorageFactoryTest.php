<?php

namespace Tests\Unit\StrategyPattern;

use DesignPattern\StrategyPattern\Storage;
use DesignPattern\StrategyPattern\StorageFactory;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class StorageFactoryTest extends TestCase
{
    private StorageFactory $storageFactory;

    public function setUp(): void
    {
        $this->storageFactory = new StorageFactory();
    }

    public function testStorageFactoryWithValidAdapter()
    {
        $storage = $this->storageFactory->build('S3');
        self::assertInstanceOf(Storage::class, $storage);
    }

    public function testStorageFactoryWithInvalidAdapter()
    {
        self::expectException(InvalidArgumentException::class);
        $this->storageFactory->build('qualquercoisa');
    }
}
