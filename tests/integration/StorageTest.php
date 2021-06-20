<?php

namespace Tests\Integration;

use DesignPattern\StrategyPattern\StorageFactory;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class StorageTest extends TestCase
{
    private StorageFactory $storageFactory;

    public function setUp(): void
    {
        $this->storageFactory = new StorageFactory();
    }

    public function testStoreWithS3Adapter()
    {
        $storage = $this->storageFactory->build('S3');
        $return = $storage->store('/home/danilo/remetentes.csv');
        self::assertTrue($return);
    }

    public function testStoreWithFileSystemAdapter()
    {
        $storage = $this->storageFactory->build('FileSystem');
        $return = $storage->store('/home/danilo/remetentes.csv');
        self::assertTrue($return);
    }

    public function testStoreWithInvalidAdapter()
    {
        self::expectException(InvalidArgumentException::class);
        $this->storageFactory->build('teste');
    }
}
