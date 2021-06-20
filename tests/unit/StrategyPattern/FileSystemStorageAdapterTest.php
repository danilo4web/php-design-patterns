<?php

namespace Tests\Unit\StrategyPattern;

use DesignPattern\StrategyPattern\FileSystemStorageAdapter;
use PHPUnit\Framework\TestCase;

class FileSystemStorageAdapterTest extends TestCase
{
    public function testStore()
    {
        $fileSystemStorageAdapter = new FileSystemStorageAdapter();
        $result = $fileSystemStorageAdapter->store('/home/danilo/remetentes.csv');

        self::assertTrue($result);
    }
}
