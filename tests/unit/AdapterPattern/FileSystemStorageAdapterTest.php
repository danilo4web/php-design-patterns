<?php

namespace Tests\Unit\AdapterPattern;

use DesignPattern\AdapterPattern\FileSystemStorageAdapter;
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
