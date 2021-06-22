<?php

namespace Tests\Unit\AdapterPattern;

use DesignPattern\StrategyPattern\Storage;
use DesignPattern\StrategyPattern\StorageInterface;
use PHPUnit\Framework\TestCase;

class StorageTest extends TestCase
{
    private StorageInterface $storageStrategy;
    private Storage $storage;

    public function setUp(): void
    {
        $this->storageStrategy = $this->getMockBuilder(StorageInterface::class)->getMock();
        $this->storage = new Storage($this->storageStrategy);
    }

    public function testStore()
    {
        $this->storageStrategy->method('store')->willReturn(true);

        $result = $this->storage->store('testFile.txt');

        self::assertTrue($result);
    }
}
