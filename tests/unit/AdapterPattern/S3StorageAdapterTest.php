<?php

namespace Tests\Unit\AdapterPattern;

use DesignPattern\AdapterPattern\S3StorageAdapter;
use PHPUnit\Framework\TestCase;

class S3StorageAdapterTest extends TestCase
{
    public function testStore()
    {
        $fileSystemStorageAdapter = new S3StorageAdapter();
        $result = $fileSystemStorageAdapter->store('/home/danilo/remetentes.csv');

        self::assertTrue($result);
    }
}
