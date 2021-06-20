<?php

namespace Tests\Unit\AdapterPattern;

use DesignPattern\StrategyPattern\S3StorageStrategy;
use PHPUnit\Framework\TestCase;

class S3StorageStrategyTest extends TestCase
{
    public function testStore()
    {
        $fileSystemStorageAdapter = new S3StorageStrategy();
        $result = $fileSystemStorageAdapter->store('/home/danilo/remetentes.csv');

        self::assertTrue($result);
    }
}
