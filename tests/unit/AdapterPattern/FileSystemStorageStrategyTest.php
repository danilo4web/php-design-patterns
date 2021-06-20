<?php

namespace Tests\Unit\AdapterPattern;

use DesignPattern\StrategyPattern\FileSystemStorageStrategy;
use PHPUnit\Framework\TestCase;

class FileSystemStorageStrategyTest extends TestCase
{
    public function testStore()
    {
        $fileSystemStorageAdapter = new FileSystemStorageStrategy();
        $result = $fileSystemStorageAdapter->store('/home/danilo/remetentes.csv');

        self::assertTrue($result);
    }
}
