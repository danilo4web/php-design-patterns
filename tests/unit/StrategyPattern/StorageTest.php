<?php

namespace Tests\Unit\StrategyPattern;

use DesignPattern\StrategyPattern\Storage;
use DesignPattern\StrategyPattern\StorageInterface;
use PHPUnit\Framework\TestCase;

class StorageTest extends TestCase
{
    private StorageInterface $storageAdapter;
    private Storage $storage;

    public function setUp(): void
    {
        $this->storageAdapter = $this->getMockBuilder(StorageInterface::class)->getMock();
        $this->storage = new Storage($this->storageAdapter);
    }

    public function testStore()
    {
        $this->storageAdapter->method('store')->willReturn(true);

        $result = $this->storage->store('testFile.txt');

        self::assertTrue($result);
    }
}
