<?php

namespace Tests\Unit\AdapterPattern;

use DesignPattern\StrategyPattern\S3StorageStrategy;
use PHPUnit\Framework\TestCase;

class S3StorageStrategyTest extends TestCase
{
    public function testStore()
    {
        $file = '/home/danilo/remetentes.csv';

        $fileSystemStorageAdapter = new S3StorageStrategy();
        $result = $fileSystemStorageAdapter->store($file);

        self::assertTrue($result);
    }

    public function testGetAndSetBucket()
    {
        $expected = 'myBucket';
        $fileSystemStorageAdapter = new S3StorageStrategy();
        $fileSystemStorageAdapter->setBucket($expected);
        $myBucket = $fileSystemStorageAdapter->getBucket();

        self::assertEquals($expected, $myBucket);
    }

    public function testGetAndSetSecret()
    {
        $expected = 'YKSEViPO6RazPRZzVwVwfVxZGYFcLRAi0L0D2AeJ';
        $fileSystemStorageAdapter = new S3StorageStrategy();
        $fileSystemStorageAdapter->setSecret($expected);
        $mySecret = $fileSystemStorageAdapter->getSecret();

        self::assertEquals($expected, $mySecret);
    }

    public function testGetAndSetKey()
    {
        $expected = 'AFVHM3NVAPUOKIA3BLUE';
        $fileSystemStorageAdapter = new S3StorageStrategy();
        $fileSystemStorageAdapter->setKey($expected);
        $myKey = $fileSystemStorageAdapter->getKey();

        self::assertEquals($expected, $myKey);
    }
}
